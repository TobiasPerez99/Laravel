<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/' , function(){
//     return "hola desde la pagina de inicio";
// });

// Route::get('saludo/{nombre?}', function ($nombre = "invitado") {
//     return "Saludos " . $nombre;
// });

// Route::get('contactame', function () {
//     return "Seccion de Contactos";
// })->name('contactos');

// Route::get('/', function () {
//     echo "<a href='" . route('contactos') . "'>contactos 1 </a><br>";
//     echo "<a href='" . route('contactos') . "'>contactos 2 </a><br>";
//     echo "<a href='" . route('contactos') . "'>contactos 3 </a><br>";
//     echo "<a href='" . route('contactos') . "'>contactos 4 </a><br>";
//     echo "<a href='" . route('contactos') . "'>contactos 5 </a><br>";
    
// });

// Route::get('/', function () {
//     $nombre = "Tobias";

//     return view('home', compact('nombre')); 
// })->name('home');


// Route::view('/', 'home' , ['nombre'=> 'Tobias']);

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('portofolio');
Route::view('/portfolio', 'portfolio')->name('portfolio');