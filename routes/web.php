<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PessoaController,
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
Route::get('/pessoa/list', [PessoaController::class, 'index'])->name('pessoa.list');
Route::get('/pessoa/create', [PessoaController::class, 'create'])->name('pessoa.create');
Route::post('/pessoa', [PessoaController::class, 'store'])->name('pessoa.store');
Route::put('/pessoa/{id}', [PessoaController::class, 'update'])->name('pessoa.update');
Route::delete('/pessoa/{id}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');
Route::get('/pessoa/details/{id}', [PessoaController::class, 'show'])->name('pessoa.details');
Route::get('/pessoa/edit/{id}', [PessoaController::class, 'edit'])->name('pessoa.edit');
 Route::get('/pessoa/search', [PessoaController::class, 'search'])->name('pessoa.search');


Route::get('/', function () {
    return view('home');
});
