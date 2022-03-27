<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

//ruta para becarios
Route::resource('becarios', 'App\Http\Controllers\BecariosController');
Route::resource('proyecto', 'App\Http\Controllers\ProyectoController');

Route::get('proyecto/{documento}/pdfview', [
    'uses' => function () {
        return response()->download('{documento}', 'example.pdf', [], 'inline');
    },
    'as'   => 'proyecto.pdfview'
]);

Route::get('pdf', function () {
        return "hola";
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inventario', [App\Http\Controllers\Inventario::class, 'index'])->name('inventario');
