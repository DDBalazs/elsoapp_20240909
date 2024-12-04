<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/angol', function () {
    return view('angol');
});

Route::get('/nemet', function () {
    return view('nemet');
});

Route::get('/orosz', function () {
    return view('orosz');
});
