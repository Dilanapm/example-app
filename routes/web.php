<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () { // dentro de los parentesis('/',function(){})significa yo visito esta url, y ejecuto esta funcion
    return view('principal');
});

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);


Route::get('/muro',[PostController::class,'index'])->name('posts.index');

