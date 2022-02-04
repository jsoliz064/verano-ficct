<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Livewire\Estudiantes;
use App\Http\Controllers\MateriaController;

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
    return view('prueba');
})->name('inicio');

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('prueba');
})->name('dashboard');

Route::get('salir', function () {
    auth()->logout();
    return redirect()->route('inicio');
})->name('user.logout');

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

Route::get('materias', function () {
    return view('materia.index');
})->name('materias.index');

Route::get('materias-estudiantes/{materia_id}',[MateriaController::class,'show2'])->name('materia.estudiantes.show');
