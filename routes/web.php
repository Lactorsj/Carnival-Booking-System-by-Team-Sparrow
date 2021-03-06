<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckIn;
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

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])
    ->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/InvDelete', [\App\Http\Controllers\DashboardController::class, 'InvDelete'])
    ->middleware(['auth'])->name('InvDelete');

Route::get('/CheckIn', [CheckIn::class, 'CheckIn'])->name('checkin');

Route::post('update', [CheckIn::class, 'update']);

Route::get('/booking', function () {
    return view('BookingView');
})->middleware(['auth'])->name('booking');

Route::get('/booking/DayBooking', [\App\Http\Controllers\BookingController::class, 'access'])
    ->middleware(['auth'])->name('DayBooking');

require __DIR__ . '/auth.php';
