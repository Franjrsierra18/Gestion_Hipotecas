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
Route::get('/cliente', function () {
    return view('paginas.cliente');
});
Route::get('/experto/{id}', function ($id) {
    // return view('paginas.experto');
    return 'Experto hipotecario '.$id.', Esta es una lista de tus solicitudes';
});