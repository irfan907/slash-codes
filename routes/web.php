<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('under-maintenance');
// })->name('under');


Route::prefix('')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::view('services','services')->name('services');
    Route::view('services/360-solutions','services.360-solutions')->name('services.360_solutions');
    Route::view('services/app-development','services.app-development')->name('services.app_development');
    Route::view('services/web-design-and-development','services.web-design-and-development')->name('services.web_development');
    Route::view('services/digital-marketing','services.digital-marketing')->name('services.digital_marketing');
    Route::view('services/graphic-designing','services.graphic-designing')->name('services.graphic_designing');
    Route::view('about-us','about-us')->name('about_us');
    Route::view('contact-us','contact-us')->name('contact_us');
    Route::post('contact-us',[PageController::class,'saveContact'])->name('save_contact_us');
    Route::view('blogs','blogs.blogs-list')->name('blogs');
    Route::view('blogs/detail','blogs.blog-detail')->name('blogs_detail');
    Route::view('our-team','our-team')->name('our_team');
    Route::view('pricing','pricing')->name('pricing');
    Route::view('testimonials','testimonials')->name('testimonials');
    Route::view('free-quote','get-quote')->name('get_a_quote');
    Route::post('free-quote',[PageController::class,'saveFreeQuote'])->name('save_quote');
    Route::view('thank-you','thank-you')->name('thank_you');
});


