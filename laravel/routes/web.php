<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::get('/portafolio', [ProjectController::class, 'index'])->name('project.index');
Route::get('/portafolio/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessageController@store')->name('message.store');
