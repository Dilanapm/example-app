<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () { // dentro de los parentesis('/',function(){})significa yo visito esta url, y ejecuto esta funcion
    return view('principal');
});

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/{user:username}',[PostController::class,'index'])->name('posts.index'); // al colocar dentro de llaves un modelo como es user estamos usando route model binding
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');

Route::post('/imagenes',[ImageController::class, 'store'])->name('imagenes.store');