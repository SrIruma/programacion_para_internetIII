<?php

use Illuminate\Support\Facades\Route;

Route::get('/public/index.html', function () {
    return view('index');
});
