<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    if ($user = Auth::user()) {
        //if login
        return redirect('/dashboard');
    } else {
        //if not login
        return redirect('login');
    }
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'loadDashboard'])->name('dashboard');
    Route::get('/dashboard/admin', [App\Http\Controllers\DashboardController::class, 'loadDashboard'])->name('dashboard.Admin');
});
Auth::routes();
Route::get('dashboard_aa', [App\Http\Controllers\DashboardController::class, 'loadDashboard'])->name('dashboard_aa');


Route::get('/ManageSchedule', function () {
    return view('ManageSchedule.AddSchedule')->name('manageSchedule');
});

Route::get('/ManageSchedule',
 'App\Http\Controllers\ScheduleController@index');

//add schedule
Route::post('/ManageSchedule/create',
'App\Http\Controllers\ScheduleController@create');

//edit schedule and delete schedule
Route::get('/ManageSchedule/{id}/edit',
 'App\Http\Controllers\ScheduleController@edit');

 Route::post('/ManageSchedule/{id}/update',
 'App\Http\Controllers\ScheduleController@update');

 //delete schedule
 Route::get('/ManageSchedule/{id}/delete',
 'App\Http\Controllers\ScheduleController@delete');

 Route::get('/schedules/add', 'ScheduleController@addSchedule')->name('ManageSchedule.AddSchedule');

//  Route::get('/ManageSchedule',
//  'App\Http\Controllers\ScheduleController@view');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//payment

Route::get('/managepayment', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/managepayment/add-to-cart', [PaymentController::class, 'addToCart'])->name('payments.addToCart');
Route::get('/managepayment/checkout', [PaymentController::class, 'checkout'])->name('payments.checkout');


//inventory

Auth::routes();
//Route::get('/manageinventory/viewinventory', [App\Http\Controllers\InventoryController::class, 'viewinventory'])->name('viewinventory');

Route::get(
    '/manageinventory',
    [InventoryController::class, 'index']

)->name('inventorys');
//create blog user
Route::get(
    '/manageinventory/create',
    [InventoryController::class, 'create']

)->name('inventorys.create'); //mesti akan jumpa route akan guna nama ni

//store blog user
Route::post(//pakai method post sebab form pakai post
    '/manageinventory/store',
    [InventoryController::class, 'store']

)->name('inventorys.store'); //mesti akan jumpa route akan guna nama ni

// Edit inventory
Route::get('/inventorys/{id}/edit', [InventoryController::class, 'edit'])->name('inventorys.edit');

// Update inventory
Route::put('/inventorys/{id}/update', [InventoryController::class, 'update'])->name('inventorys.update');

//delet blog
Route::delete(//pakai method pdelete sebab form pakai dekat edit.blade delete
    '/inventorys/{id}/delete',
    [InventoryController::class, 'delete']

)->name('inventorys.delete'); //mesti akan jumpa route akan guna nama ni

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Homepage Sales Report
Route::get('/Home', function () {
    return view('Homepage');
});

//Homepage Sales Report
Route::get('/Home2', function () {
    return view('PetakomSalesReport');
});

//add, delete, create, update sales report
Route::get('/salesReport','App\Http\Controllers\salesreportsController@index')->name('ManageSalesReport.ADMIN.ViewSalesReportPage');
Route::get('/salesReport/create', 'App\Http\Controllers\salesreportsController@create')->name('ManageSalesReport.ADMIN.AddSalesReportPage');
Route::get('/salesReport/{id}/edit', 'App\Http\Controllers\salesreportsController@edit');
Route::post('/salesReport/{id}/update', 'App\Http\Controllers\salesreportsController@update');
Route::post('/salesReport', 'App\Http\Controllers\salesreportsController@store')->name('salesReport.store');
Route::delete('/salesReport/{id}', 'App\Http\Controllers\salesreportsController@destroy')->name('salesReport.destroy');



Route::get('/Petakom', function () {
    return view('ManageSalesReport.PETAKOM_Coordinator.ViewSalesReportPage');

});
