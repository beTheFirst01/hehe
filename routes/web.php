<?php

use App\Http\Controllers\BookingContoller;
use App\Http\Controllers\HomestayController;
use App\Models\Homestay;
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



route::resource('/admin',HomestayController::class);

route::post('/booking',[BookingContoller::class,'booking' ])->name('ngebooking');