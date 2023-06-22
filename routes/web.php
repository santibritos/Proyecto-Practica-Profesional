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
    return view('index.login');
});

Route::get('login', function () {
    return view('index.login');
});

Route::get('crearUsuario', function () {
    return view('index.crearUsuario');
});

Route::get('menu', function () {
    return view('index.menu');
});

Route::get('navbar', function () {
    return view('index.navbar');
});

Route::get('plantilla', function () {
    return view('index.plantilla');
});

Route::get('cuenta', function () {
    return view('index.cuenta');
});
