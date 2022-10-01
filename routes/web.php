<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InserirDadosController;
use App\Http\Controllers\EditarDadosController;
use App\Http\Controllers\ExcluirDadosController;
use \App\Http\Controllers\PrincipalController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

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
//Rotas com o usuário autenticado
Route::middleware('auth')->group(function(){
    Route::get('/principal', [PrincipalController::class,'index'])->name('principal');
    Route::get('/inserir',[InserirDadosController::class,'index'])->name('inserir');
    Route::post('/inserir',[InserirDadosController::class,'store'])->name('inserir');
    Route::get('/principal/editar/{id}',[EditarDadosController::class,'index']);  
    Route::post('/principal/editar/{id}',[EditarDadosController::class,'edit']);  
    Route::get('/principal/excluir/{id}',[ExcluirDadosController::class,'delete']);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');  
});

//Rotas com usuário Convidado
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});



