<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InserirDadosController;
use App\Http\Controllers\EditarDadosController;
use App\Http\Controllers\ExcluirDadosController;
use \App\Http\Controllers\PrincipalController;


/*
|--------------------------------------------------------- -----------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!                          
|
*/

//Rota inicial (Guest)
//Após o login, a rota inicial será o '/principal'
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::middleware('auth')->group(function(){
    Route::get('/principal', [PrincipalController::class,'index'])->name('principal');
    Route::get('/inserir',[InserirDadosController::class,'index'])->name('inserir');
    Route::post('/inserir',[InserirDadosController::class,'store'])->name('inserir');
    Route::get('/principal/editar/{id}',[EditarDadosController::class,'index']);  
    Route::post('/principal/editar/{id}',[EditarDadosController::class,'edit']);  
    Route::get('/principal/excluir/{id}',[ExcluirDadosController::class,'delete']);  
});

require __DIR__.'/auth.php';
