<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function(){
    return view('sesion');
})->name('login');

Route::get('/perfil', function(){
    return view('perfil');
})->name('perfil');    
Route::get('/cajones', function(){
    return view('cajones');
})->name('cajones');