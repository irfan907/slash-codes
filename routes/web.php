<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('under-maintenance');
})->name('under');


Route::prefix('staging')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::view('about-us','about-us')->name('about_us');
    Route::view('contact-us','contact-us')->name('contact_us');
    Route::view('services','services')->name('services');
    Route::view('blogs','blogs.blogs-list')->name('blogs');
    Route::view('blogs/detail','blogs.blog-detail')->name('blogs_detail');
    Route::view('our-team','our-team')->name('our_team');
    Route::view('pricing','pricing')->name('pricing');
    Route::view('testimonials','testimonials')->name('testimonials');
    Route::view('get-a-quote','get-quote')->name('get_a_quote');
});


