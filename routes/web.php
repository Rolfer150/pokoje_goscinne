<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainFacilitiesControlller;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\RoomsController;
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

Route::get('/', [MainFacilitiesControlller::class, 'index'])->name('home');
Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');
Route::get('/pokoje', [RoomsController::class, 'index'])->name('rooms');
