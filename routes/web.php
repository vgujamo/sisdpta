<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PessoaController,
    FuncionarioController,
    ProcessoController,
    CountryDataController,
    EspecieProcessoConroller,
  
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



Route::get('seccao_data', [EspecieProcessoConroller::class,'index'])->name('pais_data');
Route::get('get_subseccao_by_seccao/{id}', [EspecieProcessoConroller::class,'getSubseccao'])->name('get_subseccao_by_seccao');
Route::get('get_especie-by_subseccao/{id}', [EspecieProcessoConroller::class,'getEspecie'])->name('get_especie_by_subseccao');
Route::get('get_especie-by_seccao/{id}', [EspecieProcessoConroller::class,'getEspecieSeccao'])->name('get_especie_by_seccao');

Route::get('/especie/especie_list', [EspecieProcessoConroller::class, 'index'])->name('especie.especie_list');
Route::get('/especie/especie_create', [EspecieProcessoConroller::class, 'create'])->name('especie.especie_create');
Route::post('/especie', [EspecieProcessoConroller::class, 'store'])->name('especie.store');
Route::post('/especie/{id}', [EspecieProcessoConroller::class, 'update'])->name('especie.update');
Route::delete('/especie/{id}', [EspecieProcessoConroller::class, 'destroy'])->name('especie.destroy');
Route::get('/especie/especie_edit/{id}', [EspecieProcessoConroller::class, 'edit'])->name('especie.especie_edit');
Route::get('/especie/especie_details/{id}', [EspecieProcessoConroller::class, 'show'])->name('especie.especie_details');
Route::get('/especie/search', [EspecieProcessoConroller::class, 'search'])->name('especie.search');

Route::get('pais-data', [CountryDataController::class,'index'])->name('pais-data');
Route::get('get-provincia-by-pais/{id}', [CountryDataController::class,'getProvincia'])->name('get-provincia-by-pais');
Route::get('get-distrito-by-provincia/{id}', [CountryDataController::class,'getDistrito'])->name('get-distrito-by-provincia');

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
Route::get('/processo/search', [ProcessoController::class, 'search'])->name('processo.search');
Route::delete('/processo/{id}', [ProcessoController::class, 'destroy'])->name('processo.destroy');
Route::get('/processo/processo_details/{id}', [ProcessoController::class, 'show'])->name('processo.processo_details'); //Falta o id
Route::get('/processo/processo_edit/{id}', [ProcessoController::class, 'edit'])->name('processo.processo_edit');//Falta o id
Route::get('/processo/processo_validate/', [ProcessoController::class, 'validate'])->name('processo.processo_validate');















Route::get('/', function () {
    return view('home');
});
/*
 require __DIR__ . '/auth.php'; 
 */