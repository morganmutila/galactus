<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/hse-solutions', function () {
    return view('solutions');
})->name('solutions');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/what-is-industrial-safety', function () {
    return view('industrial-safety');
})->name('safety');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/brand-identity', function () {
    return view('brand');
})->name('brand');

Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');


// Admin Routes
Route::prefix('/admin')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});




Auth::routes();
