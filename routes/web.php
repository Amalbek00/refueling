<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuelTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LiterBalanceController;

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


Auth::routes();
Route::middleware(['auth'])
    ->group(function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('fuel-types', FuelTypeController::class);

        Route::resource('clients', ClientController::class);

        Route::resource('balances', LiterBalanceController::class);
        Route::get('/balances/recharge/{id}', [LiterBalanceController::class, 'recharge'])->name('balances.recharge');
        Route::post('/balances/recharge/{id}', [LiterBalanceController::class, 'recharge'])->name('balances.recharge.post');
        Route::get('/balances/withdraw/{id}', [LiterBalanceController::class, 'withdraw'])->name('balances.withdraw');
        Route::post('/balances/withdraw/{id}', [LiterBalanceController::class, 'withdraw'])->name('balances.withdraw.post');
    });
