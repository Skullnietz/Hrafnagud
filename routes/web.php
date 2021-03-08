<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::name('inicio')->get('/inicio', function () {return view('welcome');});
Route::name('Iniciosesion')->get('/Iniciosesion', function () {return view('Iniciosesion');});
Route::name('productos')->get('/productos', function () {return view('productos');});
Route::name('userlist')->get('/userlist', function () {return view('userlist');});
Route::name('carrito')->get('/carrito', function () {return view('carrito');});
Route::name('pedidos')->get('/pedidos', function () {return view('pedidos');});
Route::post('Iniciosesion', function (){
    return view('productos');
});
