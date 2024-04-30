<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/contactus', function () {
    return view('contact');
});

Route::get('/explore', function () {
    return view('products');
});

Route::get('/cart', function () {
    return view('cart_prod');
});

Route::get('/login', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('proedit');
});
