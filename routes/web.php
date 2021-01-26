<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClubController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\UserController;




/* ovo su rute gdje korisnik MORA biti prijavljen da bi im pristupio */
Route::middleware(['auth'])->group(function () {

Route::get('/', function () {
    return view('welcome');
});

/* homepage, primjetiti ->name('home') na kraju */
Route::get('/', function () {
    return view('welcome');
})->name('home');

/* ::post, ::put, ::patch, ::delete */
Route::resource('clubs', ClubController::class);
Route::resource('countries', CountryController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('roles', RoleController::class);
Route::resource('terrains', TerrainController::class);
Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
