<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesoresController;

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
    return view('welcome');
});

Route::get('profesores/index',[ProfesoresController::class,'index'])->name('index');  
Route::get('profesores/formulario',[ProfesoresController::class,'formulario'])->name('formulario'); 
Route::post('/crear', [ProfesoresController::class, 'crear'])->name('crear');
Route::get('/eliminar/{id}',[ProfesoresController::class,'eliminar'])->name('eliminar');

Route::get('/editar/{id}',[ProfesoresController::class,'editar'])->name('editar');
Route::post('/actualizar/{id}',[ProfesoresController::class,'actualizar'])->name('actualizar');

Route::get('/ver/{id}',[ProfesoresController::class,'ver'])->name('ver');

Route::get('/profesores/buscar',[ProfesoresController::class,'buscar'])->name('buscar');
