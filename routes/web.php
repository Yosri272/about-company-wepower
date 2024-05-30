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
// routes/web.php
Route::get('/', function () {
    return view('home');
});

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }

    return redirect()->back();


});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio');

Route::get('home', function () {
    return view('home');
})->name('home');
