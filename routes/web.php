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
    return view('layout');
});

Route::get('/', function () {
    return view('layout');
})->name('layout');

// Route::get('roles', function () {
//     return view('Roles.agregar');
// })->name('roles');

Route::resource('roles', RolController::class)->names('roles');
Route::resource('personas', PersonasController::class)->names('personas');
Route::resource('provedores', ProvedorController::class)->names('provedores');
Route::resource('tipoproductos', TipoproductoController::class)->names('tipoproductos');
Route::resource('empresas', EmpresasController::class)->names('empresas');
Route::resource('impuestos', ImpuestosController::class)->names('impuestos');
Route::resource('productos', ProductosController::class)->names('productos');
