<?php

namespace App\Http\Controllers;
use App\Models\{
    Pessoa,
    Funcionario,
    Processo,
    Pais,
    Provincia,
    Distrito,
};
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateFuncionario;
use DB;

class FuncionarioController extends Controller {

    private $funcionario;

    function __construct(Funcionario $funcionario) {
        $this->funcionario = $funcionario;
    }

    public function index() {
        $funcionarios = $this->funcionario->with('pessoa')->latest()->paginate(5);

        return view('funcionario.funcionario_list', compact('funcionarios'));
    }

    public function create() {
        $paises = Pais::get();
        $provincias = Provincia::get();
        $distritos = Distrito::get();
        $pessoas = Pessoa::latest()->get();
        return view('funcionario.funcionario_create', compact('pessoas', 'paises', 'provincias', 'distritos'));
    }

    public function store(StoreUpdateFuncionario $request) {
        $data = $request->all();
        
        $pessoa = Pessoa::create($data);
        $insert = $pessoa->funcionario()->create($data);
        if ($insert) {
            return redirect()->route('funcionario.funcionario_list')->with('messageicon', 'success')
                            ->with('message', 'Dados gravados com sucesso!')
                            ->with('txtmessage', 'Clique OK para continuar.');
        }
    }

    public function show($id) {
        if (!$funcionario = Funcionario::find($id)) {
            return redirect()->route('funcionario.funcionario_list');
        }
        return view('funcionario.funcionario_details', compact('funcionario'));
    }

    public function edit($id) {
        //dd($id);
        if (!$funcionario = Funcionario::find($id)) {
            return redirect()->back();
        }
        $paises = Pais::get();
        $provincias = Provincia::get();
        $distritos = Distrito::get();
        return view('funcionario.funcionario_edit', compact('funcionario', 'paises', 'provincias', 'distritos'));
    }

    public function update(StoreUpdateFuncionario $request, $id) {
        //$pessoa = Pessoa::where('id', $id)->first();
        if (!$funcionario = Funcionario::find($id)) {
            return redirect()->back();
        }
        $funcionario->update($request->all());
        return redirect()->route('funcionario.funcionario_list')
                        ->with('messageicon', 'success') //incon de sucesso
                        ->with('message', 'Dados actualizados com sucesso!') //Messagem de popup de sucesso na actualizacao de dados
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    public function destroy($id) {
        if (!$funcionario = Funcionario::find($id))
            return redirect()->route('funcionario.funcionario_list');
        $funcionario->delete();
        return redirect()->route('funcionario.funcionario_list');
    }

    public function search(Request $request) {
        //dd("Pesquisando por {$request->search}");
        $funcionarios = Pessoa::where('nome', 'LIKE', "%{$request->search}%") //pesquisar pelo nome
                ->orwhere('apelido', 'LIKE', "%{$request->search}%")     //pesquisar pelo apelido
                ->orwhere('nuit', '=', "%{$request->search}%")           //Pesquisar pelo nuit
                ->paginate(5);                                           //Numero de registos por pagina
        return view('funcionario.funcionario_list', compact('funcionarios'));
    }

}
