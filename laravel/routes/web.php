<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::post('contact', 'App\Http\Controllers\MessagesController@store');
