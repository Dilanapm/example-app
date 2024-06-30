<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { // dentro de los parentesis('/',function(){})significa yo visito esta url, y ejecuto esta funcion
    return view('principal');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
