<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('home');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/mail/{konsultasi}', [App\Http\Controllers\HomeController::class, 'mail'])->name('mail');

Route::prefix('konsultasi')->name('konsultasi.')->group(function () {
    Route::get('/', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/{konsultasi}', [App\Http\Controllers\KonsultasiController::class, 'show'])->name('show')->middleware('auth');
    Route::put('/{konsultasi}', [App\Http\Controllers\KonsultasiController::class, 'update'])->name('update')->middleware('auth');
    Route::post('/', [App\Http\Controllers\KonsultasiController::class, 'store'])->name('store')->middleware('auth');

});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index')->middleware('auth');
    Route::post('/', [App\Http\Controllers\UserController::class, 'store'])->name('store')->middleware('auth');
});
