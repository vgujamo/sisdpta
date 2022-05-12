<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PessoaController,
    FuncionarioController,
    ProcessoController,
  
};

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
Route::middleware(['auth'])->group(function () {
    
});



Route::get('/pessoa/pessoa_list', [PessoaController::class, 'index'])->name('pessoa.pessoa_list');
Route::get('/pessoa/pessoa_create', [PessoaController::class, 'create'])->name('pessoa.pessoa_create');
Route::post('/pessoa', [PessoaController::class, 'store'])->name('pessoa.store');
Route::put('/pessoa/{id}', [PessoaController::class, 'update'])->name('pessoa.update');
Route::delete('/pessoa/{id}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');
Route::get('/pessoa/pessoa_details/{id}', [PessoaController::class, 'show'])->name('pessoa.pessoa_details');
Route::get('/pessoa/pessoa_edit/{id}', [PessoaController::class, 'edit'])->name('pessoa.pessoa_edit');
Route::get('/pessoa/search', [PessoaController::class, 'search'])->name('pessoa.search');

Route::get('/funcionario/funcionario_list', [FuncionarioController::class, 'index'])->name('funcionario.funcionario_list');
Route::get('/funcionario/funcionario_create', [FuncionarioController::class, 'create'])->name('funcionario.funcionario_create');
Route::post('/funcionario', [FuncionarioController::class, 'store'])->name('funcionario.store');
Route::put('/funcionario/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');
Route::get('/funcionario/search', [FuncionarioController::class, 'search'])->name('funcionario.search');
Route::delete('/funcionario/{id}', [FuncionarioController::class, 'destroy'])->name('funcionario.destroy');
Route::get('/funcionario/funcionario_details/{id}', [FuncionarioController::class, 'show'])->name('funcionario.funcionario_details');
Route::get('/funcionario/funcionario_edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.funcionario_edit');

Route::get('/processo/processo_list', [ProcessoController::class, 'index'])->name('processo.processo_list');
Route::get('/processo/processo_create', [ProcessoController::class, 'create'])->name('processo.processo_create');
Route::post('/processo', [ProcessoController::class, 'store'])->name('processo.store');
Route::put('/processo/{id}', [ProcessoController::class, 'update'])->name('processo.update');
Route::get('/processo/search', [ProcessoController::class, 'search'])->name('processo.processo_search');
Route::delete('/processo/{id}', [ProcessoController::class, 'destroy'])->name('processo.destroy');
Route::get('/processo/processo_details/{id}', [ProcessoController::class, 'show'])->name('processo.processo_details'); //Falta o id
Route::get('/processo/processo_edit/{id}', [ProcessoController::class, 'edit'])->name('processo.processo_edit');//Falta o id















Route::get('/', function () {
    return view('home');
});
/*
 require __DIR__ . '/auth.php'; 
 */