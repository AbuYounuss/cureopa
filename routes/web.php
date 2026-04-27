<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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



// // contact page route
// Route::get('/contact', [ContactController::class, 'index'])->name('contact');        // show page
// Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');   // handle form

// contact page route
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// project page route
Route::get('/project', function () {
    return view('pages.project');
})->name('project');


// terms and conditions route
Route::get('/terms-conditions', function () {
    return view('pages.terms-conditions');
})->name('terms-conditions');

// privacy policy route
Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

// return policy route
Route::get('/return-policy', function () {
    return view('pages.return-policy');
})->name('return-policy');

// faq route
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');
