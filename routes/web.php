<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('members', App\Http\Controllers\memberController::class);

Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create'); 
Route::get('/customers/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
Route::post('/customers/update', 'App\Http\Controllers\CustomerController@update');
Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new')->name('customers.new');
Route::get('/customer/index', 'App\Http\Controllers\CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'App\Http\Controllers\CustomerController@create')->name('customer.create');
Route::get('/loggedInMember','App\Http\Controllers\memberController@getLoggedInMemberDetails');



Route::resource('courts', App\Http\Controllers\courtController::class);


Route::resource('bookings', App\Http\Controllers\bookingController::class);

Route::get('calendar/display', 'App\Http\Controllers\CalendarController@display');

Route::get('/calendar/json','App\Http\Controllers\CalendarController@json')->name('calendar.json');