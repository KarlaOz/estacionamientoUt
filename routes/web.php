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
})->name('welcome');

Route::get('/sesion', function(){
    return view('sesion');
})->name('sesion');

Route::get('/perfil', function(){
    return view('perfil');
})->name('perfil');

Route::get('/cajones', function(){
    return view('cajones');
})->name('cajones');

Route::get('/estacionamientos',function(){
    return view('estacionamiento');
})->name('estacionamiento');