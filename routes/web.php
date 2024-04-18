<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book-now/{hostel}', [App\Http\Controllers\HomeController::class, 'bookNow'])->name('bookNow');
Route::post('/book-now/{hostel}', [App\Http\Controllers\HomeController::class, 'storeBookingInfo'])->name('storeBookingInfo');
Route::get('/booking-list', [App\Http\Controllers\AdminController::class, 'bookingList'])->name('bookingList');

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/create-hostel', [App\Http\Controllers\AdminController::class, 'createHostel'])->name('createHostel');
    Route::post('/create-hostel', [App\Http\Controllers\AdminController::class, 'storeHostel'])->name('storeHostel');
    Route::get('/manage-hostel/{hostel}', [App\Http\Controllers\AdminController::class, 'manageHostel'])->name('manageHostel');
    Route::post('/manage-hostel/{hostel}', [App\Http\Controllers\AdminController::class, 'updateHostel'])->name('updateHostel');
});
