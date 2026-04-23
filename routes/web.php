<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// home route
Route::get('/',function(){
    return view('pages.home');
});

// routes/web.php
Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');

// about route
Route::get('/about',function(){
    return view('pages.about');
});

// contact route
Route::get('/contact',function(){
    return view('pages.contact');
});
