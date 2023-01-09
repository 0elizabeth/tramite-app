<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TdocumentoController;
use Illuminate\Support\Facades\Auth;
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

Route::resource('documentos/tdocumentos',TdocumentoController::class)
->names('documentos.tdocumentos');
Route::resource('documentos/cliente',ClienteController::class)
->names('documentos.clientes');

Route::resource('oficina/users',OficinaController::class)
->names('oficinas.users');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
