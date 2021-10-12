<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\CategoriaController,
    App\Http\Controllers\ProductoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);
