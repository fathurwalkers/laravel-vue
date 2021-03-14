<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;

Route::get('/', function () {
    return view('app');
});

Route::group(['prefix' => '/dashboard'], function () {
    Route::get('{any}', function () {
        return view('app');
    })->where('any', '.*');
});

Route::get('/generate-data', [BackController::class, 'generate_data'])->name('generate-data');
