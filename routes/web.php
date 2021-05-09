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