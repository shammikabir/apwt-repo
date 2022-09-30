<?php

use Illuminate\Support\Facades\Route;


Route::get('/hello', function () {
    return "hello world";
});

Route::get('/home', function () {
    return view ("homepage");
});

Route::get('/teams', function () {
    return view ("Ourteams");
});

Route::get('/about', function () {
    return view ("Aboutus");
});

Route::get('/contact', function () {
    return view ("Contact");
});

