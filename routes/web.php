<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () { // dentro de los parentesis('/',function(){})significa yo visito esta url, y ejecuto esta funcion
    return view('principal');
});

Route::get('/crear-cuenta',[RegisterController::class,'index']);

