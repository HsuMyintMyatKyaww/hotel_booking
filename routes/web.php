<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookingController;


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

Auth::routes();

//  

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/create', [HotelController::class, 'create'])->name('hotels.create');
Route::post('/hotels', [HotelController::class, 'store'])->name('hotels.store');
Route::get('/hotels/{id}/edit', [HotelController::class, 'edit'])->name('hotels.edit');
Route::put('/hotels/{id}', [HotelController::class, 'update'])->name('hotels.update');
Route::delete('/hotels/{id}', [HotelController::class, 'destroy'])->name('hotels.destroy');

// Rooms

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/rooms/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('/rooms/{id}', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');


// Search

Route::get('search', [HotelController::class, 'search'])->name('search.hotels');
// Route::get('hotels/{hotel}/book', [BookingController::class, 'create'])->name('bookings.create');
// Route::post('hotels/{hotel}/book', [BookingController::class, 'store'])->name('bookings.store');

// Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
// Route::get('hotels/{hotel}/rooms/{room}/book', [BookingController::class, 'create'])->name('bookings.create');
// Route::post('hotels/{hotel}/rooms/{room}/book', [BookingController::class, 'store'])->name('bookings.store');

Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('hotels/{hotel}/rooms/{room}/book', [BookingController::class, 'create'])->name('bookings.create');
Route::post('hotels/{hotel}/rooms/{room}/book', [BookingController::class, 'store'])->name('bookings.store');



Route::get('hotels/{hotel}/rooms/{room}', [RoomController::class, 'detailRoom'])->name('rooms.detail');


Route::get('search', [SearchController::class, 'search'])->name('search.hotels');

Route::put('/rooms/{room}/update-availability', [RoomController::class, 'updateAvailability'])->name('rooms.updateAvailability');


