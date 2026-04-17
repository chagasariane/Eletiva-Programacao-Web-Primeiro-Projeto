<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;


Route::get('/paginainicial', function () {
    return view('welcome');
});

Route::get('/exercicio', function() {
    return view('exercicio');
});

Route::post('/resposta', function(Request $request) {
    $valor1 = $request->input('valor1');
    $valor2 = $request->input('valor2');
    $soma = $valor1 + $valor2;
    return("A soma é: $soma");
});

Route::resource('categorias', CategoriaController::class);

Route::resource('produtos', ProdutoController::class);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){return view('dashboard'); });
    Route::post('/logout', [AuthController::class, 'logout']);
});