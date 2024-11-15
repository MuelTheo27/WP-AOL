<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('home.index');

Route::get('/OurTeam', function () {
    return view('OurTeam');
});

Route::get('/login', function () {
    return view('Login');  // assuming Login.blade.php is inside the 'auth' folder
})->name('login');

Route::get('/contact', function () {
    return view('Contact');  // assuming Login.blade.php is inside the 'auth' folder
})->name('contact');
