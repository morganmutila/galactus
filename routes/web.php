<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');


// Admin Routes
Route::prefix('/admin')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');  
});



