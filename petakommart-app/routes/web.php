<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaymentController;

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

/*Route::get('/', function () {
    if ($user = Auth::user()) {
        //if login
        return redirect('/dashboard/Admin');
    } else {
        //if not login
        return redirect('login');
    }
});*/
Auth::routes();
Route::get('dashboard_aa', [App\Http\Controllers\DashboardController::class, 'loadDashboard'])->name('dashboard_aa');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//payment

Route::get(
    '/managepayment',
    [PaymentController::class, 'addcart']

)->name('payment.addcart'); //mesti akan jumpa route akan guna nama ni 


