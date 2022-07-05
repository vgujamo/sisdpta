<?php

use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;
use Illuminate\Http\Response;
use App\Http\Controllers\{
    PessoaController,
    FuncionarioController,
    ProcessoController,
    CountryDataController,
    EspecieProcessoConroller,
    JuizController,
    LoginController,
    HomeController,
    AutenticaController,
};

Route::middleware(['auth'])->group(function () {
    
});

Route::get('/auth/login', [AutenticaController::class, 'login'])->name('auth.login');
Route::get('/auth/cadastrar', [AutenticaController::class, 'cadastrar'])->name('auth.cadastrar');
Route::post('/auth/gravar', [AutenticaController::class, 'gravar'])->name('auth.gravar');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('voltar', function () {
    return redirect()->back()->withInput();
})->name('voltar');
Route::get('/', function () {
    return view('home');
});



Route::post('/auth/check', [AutenticaController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AutenticaController::class, 'logout'])->name('auth.logout');

Route::get('seccao_data', [EspecieProcessoConroller::class, 'index'])->name('pais_data');
Route::get('get_subseccao_by_seccao/{id}', [EspecieProcessoConroller::class, 'getSubseccao'])->name('get_subseccao_by_seccao');
Route::get('get_especie-by_subseccao/{id}', [EspecieProcessoConroller::class, 'getEspecie'])->name('get_especie_by_subseccao');
Route::get('get_especie-by_seccao/{id}', [EspecieProcessoConroller::class, 'getEspecieSeccao'])->name('get_especie_by_seccao');

Route::get('/especie/especie_list', [EspecieProcessoConroller::class, 'index'])->name('especie.especie_list');
Route::get('/especie/especie_create', [EspecieProcessoConroller::class, 'create'])->name('especie.especie_create');
Route::post('/especie', [EspecieProcessoConroller::class, 'store'])->name('especie.store');
Route::put('/especie/{id}', [EspecieProcessoConroller::class, 'update'])->name('especie.update');
Route::delete('/especie/{id}', [EspecieProcessoConroller::class, 'destroy'])->name('especie.destroy');
Route::get('/especie/especie_edit/{id}', [EspecieProcessoConroller::class, 'edit'])->name('especie.especie_edit');
Route::get('/especie/especie_details/{id}', [EspecieProcessoConroller::class, 'show'])->name('especie.especie_details');
Route::get('/especie/search', [EspecieProcessoConroller::class, 'search'])->name('especie.search');

Route::get('pais_data', [CountryDataController::class, 'index'])->name('pais_data');
Route::get('get_provincia_by_pais/{id}', [CountryDataController::class, 'getProvincia'])->name('get_provincia_by_pais');
Route::get('get_distrito_by_provincia/{id}', [CountryDataController::class, 'getDistrito'])->name('get_distrito_by_provincia');

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

Route::get('get_parecer/{id}', [ProcessoController::class, 'getParecer'])->name('get_parecer');
Route::get('/processo/processo_list', [ProcessoController::class, 'index'])->name('processo.processo_list');
Route::get('/processo/processo_create', [ProcessoController::class, 'create'])->name('processo.processo_create');
Route::post('/processo', [ProcessoController::class, 'store'])->name('processo.store');
Route::put('/processo/{id}', [ProcessoController::class, 'update'])->name('processo.update');
Route::get('/processo/search', [ProcessoController::class, 'search'])->name('processo.search');
Route::delete('/processo/{id}', [ProcessoController::class, 'destroy'])->name('processo.destroy');
Route::get('/processo/processo_details/{id}', [ProcessoController::class, 'show'])->name('processo.processo_details'); //Falta o id
Route::get('/processo/processo_edit/{id}', [ProcessoController::class, 'edit'])->name('processo.processo_edit'); //Falta o id
Route::get('/processo/processo_validar/', [ProcessoController::class, 'validar'])->name('processo.processo_validar');
Route::get('/anexo/download', [ProcessoController::class, 'download'])->name('download');


Route::get('/juiz/juiz_list', [JuizController::class, 'index'])->name('juiz.juiz_list');
Route::get('/juiz/juiz_create', [JuizController::class, 'create'])->name('juiz.juiz_create');
Route::post('/juiz', [JuizController::class, 'store'])->name('juiz.store');
Route::put('/juiz/{id}', [JuizController::class, 'update'])->name('juiz.update');
Route::get('/juiz/juiz_details/{id}', [JuizController::class, 'show'])->name('juiz.juiz_details');
Route::get('/juiz/juiz_edit/{id}', [JuizController::class, 'edit'])->name('juiz.juiz_edit');
/* 
 require __DIR__ . '/auth.php'; 
 */