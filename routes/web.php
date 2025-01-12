<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/damith', function () {
    return view('damith');
});

Route::get('/test', function () {
    return view('test');
});
