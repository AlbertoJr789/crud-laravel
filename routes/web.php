<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InserirDadosController;
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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::middleware('auth')->group(function(){
    Route::get('/principal', [PrincipalController::class,'index'])->name('principal');
    Route::get('/inserir',[InserirDadosController::class,'index'])->name('inserir');
    Route::post('/inserir',[InserirDadosController::class,'store'])->name('inserir');
    Route::get('/principal/editar/{{$registro->id}}',[EditarDadosController::class,'index']);  
});

require __DIR__.'/auth.php';
