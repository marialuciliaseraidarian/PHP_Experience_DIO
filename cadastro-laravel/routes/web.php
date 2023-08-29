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

Route::get('/', 'Usuario@cadastrar'); // Rota para exibir o formulário de cadastro
Route::post('/', 'Usuario@salvar');   // Rota para processar o formulário de cadastro

