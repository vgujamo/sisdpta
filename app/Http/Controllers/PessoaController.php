<?php

namespace App\Http\Controllers;

use App\Models\{
   Pessoa,
   Funcionario,
   Pais,
   Provincia,
   Distrito,
};
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePessoa;
use App\Http\Requests\StoreUpdateFuncionario;
use App\Http\Requests\StoreUpdateJuiz;


class PessoaController extends Controller {

    public function index() {
        $pessoas = Pessoa::latest()->paginate(5)->withQueryString()->fragment('pessoas');
        return view('pessoa.pessoa_list', compact('pessoas'));
    }

    public function create() {
        $paises = Pais::get();
        $provincias = Provincia::get();
        $distritos = Distrito::get();
        return view('pessoa.pessoa_create', compact('paises', 'provincias', 'distritos'));
    }

    public function store(StoreUpdatePessoa $request) {
        $pessoa = Pessoa::create($request->all());
        return redirect()->route('pessoa.pessoa_list')
                        ->with('messageicon', 'success')
                        ->with('message', 'Dados gravados com sucesso!')
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    public function show($id) {
        if (!$pessoa = Pessoa::find($id)) {
            return redirect()->route('pessoa.pessoa_list');
        }

        return view('pessoa.pessoa_details', compact('pessoa'));
    }

    public function edit($id) {
        if (!$pessoa = Pessoa::find($id)) {
            return redirect()->back();
        }
        $paises = Pais::get();
        $provincias = Provincia::get();
        $distritos = Distrito::get();

        return view('pessoa.pessoa_edit', compact('pessoa', 'paises', 'provincias', 'distritos'));
    }

    public function update(StoreUpdatePessoa $request, $id) {
        if (!$pessoa = Pessoa::find($id)) {
            return redirect()->back();
        }
        $pessoa->update($request->all());
        return redirect()->route('pessoa.pessoa_list')
                        ->with('messageicon', 'success') //incon de sucesso
                        ->with('message', 'Dados actualizados com sucesso!') //Messagem de popup de sucesso na actualizacao de dados
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    public function destroy($id) {
        if (!$pessoa = Pessoa::find($id))
            return redirect()->route('pessoa.pessoa_list');
        $pessoa->delete();
        return redirect()->route('pessoa.pessoa_list');
    }

    public function search(Request $request) {
        $pessoas = Pessoa::where('nome', 'LIKE', "%{$request->search}%") //pesquisar pelo nome
                ->orwhere('apelido', 'LIKE', "%{$request->search}%")     //pesquisar pelo apelido
                ->orwhere('nuit', '=', "%{$request->search}%")           //Pesquisar pelo nuit
                ->paginate(5);                                           //Numero de registos por pagina
        return view('pessoa.pessoa_list', compact('pessoas'));
    }

}
