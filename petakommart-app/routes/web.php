<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;

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



//profile
Route::get('/manageuser',[ProfileController::class, 'index'])->name('users');
Route::get('/manageuser/create',[ProfileController::class, 'create'])->name('users.create');
Route::post('/manageuser/store',[ProfileController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [ProfileController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}/update', [ProfileController::class, 'update'])->name('users.update');;
Route::delete('/users/{id}/delete',[ProfileController::class, 'delete'])->name('users.delete'); 
// Route::get('/profile/{id}', [App\Http\Controllers\profileController::class, 'edit'])->name('profile');
// Route::get('/editProfile/{id}', [App\Http\Controllers\profileController::class, 'update']);


//schedule
Route::get('/ManageSchedule',
 'App\Http\Controllers\ScheduleController@index');
 
Route::get('/ManageSchedule', function () {
    return view('ManageSchedule.AddSchedule')->name('manageSchedule');
});
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

//payment

Route::get('/managepayment', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/managepayment/add-to-cart', [PaymentController::class, 'addToCart'])->name('payments.addToCart');
Route::get('/managepayment/checkout', [PaymentController::class, 'checkout'])->name('payments.checkout');
Route::get('managepayment/receipt/{paymentId}', [PaymentController::class, 'showReceipt'])->name('payments.report');

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


