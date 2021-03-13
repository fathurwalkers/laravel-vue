<?php

use Illuminate\Support\Facades\Route;

Route::any('/{slug}', function () {
    return view('app');
});
