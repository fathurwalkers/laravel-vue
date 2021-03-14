<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;

Route::get('/', function () {
    return view('app');
})->name('home');

Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/{any}', function () {
        return view('app');
    })->where('any', '.*');
});

Route::get('/generate-user', [BackController::class, 'generate_user'])->name('generate-user');
Route::get('/generate-produk', [BackController::class, 'generate_produk'])->name('generate-produk');
