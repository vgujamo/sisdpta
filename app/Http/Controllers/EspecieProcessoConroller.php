<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Processo,
    Seccao,
    SubSeccao,
    Especie,
};
use \App\Http\Requests\StoreUpdateEspecie;

class EspecieProcessoConroller extends Controller {

    public function index() {
        $especies = Especie::latest()->orderBy('nome')->paginate()->withQueryString()->fragment('especies');
        return view('especie.especie_list', compact('especies'));
    }

    public function create() {
        $seccoes = Seccao::get();
        $subseccoes = SubSeccao::get();
        $especies = Especie::get();

        return view('especie.especie_create', compact('seccoes', 'subseccoes', 'especies'));
    }

    public function store(StoreUpdateEspecie $request) {
        //dd($request->nome);
        $especie = Especie::create($request->all());
        return redirect()->route('especie.especie_list')
                        ->with('messageicon', 'success')
                        ->with('message', 'Especie Inserida com sucesso!')
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    public function show($id) {
        if (!$especie = Especie::find($id)) {
            return redirect()->back();
        }
        return view('especie.especie_details', compact('especie'));
    }

    public function edit($id) {
        //dd($id);
        $seccoes = Seccao::get();
        $subseccoes = SubSeccao::get();
        $especies = Especie::get();

        if (!$especie = Especie::find($id)) {
            return redirect()->back();
        }

        return view('especie.especie_edit', compact('seccoes', 'subseccoes', 'especie'));
    }

    public function update(StoreUpdateEspecie $request, $id) {
        // dd($id);
        if (!$especie = Especie::find($id)) {
            return redirect()->back();
        }
        $especie->update($request->all());
        return redirect()->route('especie.especie_list')
                        ->with('messageicon', 'success')
                        ->with('message', 'Especie Actualizada com sucesso!')
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    public function destroy($id) {
        if (!$especie = Especie::find($id))
            return redirect()->route('especie.especie_list');
        $especie->delete();
        return redirect()->route('especie.especie_list');
    }

    public function search(Request $request) {
        $especies = Especie::where('nome', 'LIKE', "%{$request->search}%") //pesquisar pelo numero de processo
                ->paginate(5);
        return view('especie.especie_list', compact('especies'));
    }

    public function getSubseccao($id) {

        $subseccoes = SubSeccao::where('seccao_id', $id)->get(['nome', 'id']);
//dd($subseccoes);
//Quando queres usar javascript or uma api
        return response()->json($subseccoes);
// Quando queres usar teus ficheitos
//         return view('provincias', compact('provincias'));
    }

    public function getEspecie($id) {
        $especies = Especie::where('subseccao_id', $id)->get(['nome', 'id']);

        return response()->json($especies);
    }

    public function getEspecieSeccao($id) {
        $especies1 = Especie::where('seccao_id', $id)->get(['nome', 'id']);

        return response()->json($especies1);
    }

}
