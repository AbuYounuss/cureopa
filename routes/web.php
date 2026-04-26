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

// // blog route
// Route::get('/blog',function(){
//     return view('pages.blog');
// });

// // blog details route
// Route::get('/blog-details',function(){
//     return view('pages.blog-details');
// });


Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog-details/{slug}', function ($slug) {
    return view('pages.blog-details', compact('slug'));
})->name('blog.details');


// contact route
Route::get('/contact',function(){
    return view('pages.contact');
});
