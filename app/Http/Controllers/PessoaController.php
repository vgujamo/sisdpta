<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePessoa;

class PessoaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $pessoas = Pessoa::latest()->paginate(10)->withQueryString();
        return view('pessoa.list', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('pessoa.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdatePessoa $request) {
        $pessoa = Pessoa::create($request->all());
        return redirect()->route('pessoa.list')
                        ->with('messageicon', 'success')
                        ->with('message', 'Dados gravados com sucesso!')
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        if (!$pessoa = Pessoa::find($id)) {
            return redirect()->route('pessoa.listar');
        }
        return view('pessoa.details', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        if (!$pessoa = Pessoa::find($id)) {
            return redirect()->back();
        }
        return view('pessoa.edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdatePessoa $request, $id) {
        //$pessoa = Pessoa::where('id', $id)->first();
        if (!$pessoa = Pessoa::find($id)) {
            return redirect()->back();
        }
        $pessoa->update($request->all());
        return redirect()->route('pessoa.list')
                        ->with('messageicon', 'success') //incon de sucesso
                        ->with('message', 'Dados actualizados com sucesso!') //Messagem de popup de sucesso na actualizacao de dados
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        if (!$pessoa = Pessoa::find($id))
            return redirect()->route('pessoa.list');
        $pessoa->delete();
        return redirect()->route('pessoa.list');
    }

    public function search(Request $request) {
        //dd("Pesquisando por {$request->search}");
        $pessoas = Pessoa::where('nome', 'LIKE', "%{$request->search}%") //pesquisar pelo nome
                ->orwhere('apelido', 'LIKE', "%{$request->search}%")     //pesquisar pelo apelido
                ->orwhere('nuit', '=', "%{$request->search}%")           //Pesquisar pelo nuit
                ->paginate(5);                                           //Numero de registos por pagina
        return view('pessoa.list', compact('pessoas'));
    }

}
