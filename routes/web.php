<?php

use Illuminate\Support\Facades\Route;

Route::get('/crearactivo', function () {
    return view('crearactivo');
});



Route::get('/informacionactiv', function () {
    return view('informacionactiv');
});
Route::get('/inicioadmin', function () {
    return view('inicioadmin');
});
Route::get('/login', function () {
    return view('login');
});


