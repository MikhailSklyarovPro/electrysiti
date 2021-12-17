<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'App\Http\Controllers\api\ClientController@store')->name('contact-form');
Route::get('/contact/all', 'App\Http\Controllers\api\ClientController@index')->name('contact-data');
