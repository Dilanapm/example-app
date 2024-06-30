<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { // dentro de los parentesis('/',function(){})significa yo visito esta url, y ejecuto esta funcion
    return view('principal');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/tienda', function () {
    return view('tienda');
});