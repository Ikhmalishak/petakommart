<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes();
// Route::get('dashboard_aa', [App\Http\Controllers\DashboardController::class, 'loadDashboard'])->name('dashboard_aa');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard_aa');
    })->name('dashboard');
});

Route::get('/managepayment/payment', function () {
    return view('managepayment.payment');
})->name('managepayment.payment');


Auth::routes();

Route::get('/ManageSchedule', function () {
    return view('ManageSchedule.AddSchedule');
});

Route::get('/ManageSchedule',
 'App\Http\Controllers\ScheduleController@index');

//add schedule
Route::post('/ManageSchedule/create',
'App\Http\Controllers\ScheduleController@create');

//edit schedule and delete schedule
Route::get('/ManageSchedule/{id}/edit',
 'App\Http\Controllers\ScheduleController@edit');

 Route::get('/ManageSchedule/{id}/update',
 'App\Http\Controllers\ScheduleController@update');

 Route::get('/schedules/add', 'ScheduleController@addSchedule')->name('ManageSchedule.AddSchedule');

//  Route::get('/ManageSchedule',
//  'App\Http\Controllers\ScheduleController@view');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
