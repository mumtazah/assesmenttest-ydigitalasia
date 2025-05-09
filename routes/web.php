<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'landing');

// Admin CMS pages
Route::prefix('cms')->middleware(['auth'])->group(function () {
    Route::view('/articles', 'cms')->name('cms.articles'); // I would have pages to create & edit articles
    Route::view('/products', 'cms')->name('cms.products'); // I would have pages to create & edit products
    Route::view('/banners', 'cms')->name('cms.banners'); // I would have pages to create & edit banners
    Route::view('/youtube-links', 'cms')->name('cms.youtube-links'); // This is just an edit page
});

