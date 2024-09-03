<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\MainFacilitiesControlller;
use App\Http\Controllers\PriceListController;
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
Route::get('/pokoje', [RoomsController::class, 'index'])->name('room.index');
Route::get('/cennik', [PriceListController::class, 'index'])->name('price_list');
Route::controller(RentalsController::class)
    ->prefix('/rezerwacja')
    ->name('rental')
    ->group(function (){
        Route::get('/', 'create')->name('.create');
        Route::post('/store', 'store')->name('.store');
});
Route::controller(MessageController::class)
    ->prefix('/kontakt')
    ->name('message')
    ->group(function (){
        Route::get('/', 'create')->name('.create');
        Route::post('/store', 'store')->name('.store');
    });
