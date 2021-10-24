<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::get('/portafolio', [ProjectController::class, 'index'])->name('project.index');
Route::post('/portafolio', [ProjectController::class, 'store'])->name('project.store');
Route::get('/portafolio/crear', [ProjectController::class, 'create'])->name('project.create');
Route::get('/portafolio/{project}', [ProjectController::class, 'show'])->name('project.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', 'App\Http\Controllers\MessageController@store')->name('message.store');
