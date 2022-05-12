<?php

namespace App\Http\Controllers;

use App\Models\Processo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use livewire\WithFileUploads;
use App\Http\Requests\StoreUpdateProcesso;

class ProcessoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $processos = Processo::latest()->paginate(5)->withQueryString()->fragment('processos');
        return view('processo.processo_list', compact('processos'));
    }

    public function create() {
        return view('processo.processo_create');
    }

    public function store(StoreUpdateProcesso $request) {
        $data = $request->all();

        if ($request->anexo->isValid()) {
            $nameFile = Str::of($request->num_processo)->slug('-') . '.' . $request->anexo->getClientOriginalExtension();
            $anexo = $request->anexo->storeAs('processos', $nameFile);
            $data['file'] = $anexo;
        }
        $processo = Processo::create($data);
        return redirect()->route('processo.processo_list')
                        ->with('messageicon', 'success')
                        ->with('message', 'Dados Inseridos com sucesso!')
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    public function show($id) {

        if (!$processo = Processo::find($id)) {
            return redirect()->back();
        }
        return view('processo.processo_details', compact('processo'));
    }

    public function edit($id) {
        if (!$processo = Processo::find($id)) {
            return redirect()->back();
        }
        return view('processo.processo_edit', compact('processo'));
    }

    public function update(StoreUpdateProcesso $request, $id) {
        if (!$processo = Processo::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->anexo->isValid()) {
            if (Storage::exists($processo->anexo))
                Storage::delete($processo->anexo);
            
            
            $nameFile = Str::of($request->num_processo)->slug('-') . '.' . $request->anexo->getClientOriginalExtension();
            $anexo = $request->anexo->storeAs('processos', $nameFile);
            $data['image'] = $anexo;
        }

        $processo->update($data);

        return redirect()->route('processo.processo_list')
                        ->with('messageicon', 'success')
                        ->with('message', 'Dados Actualizados com sucesso!')
                        ->with('txtmessage', 'Clique OK para continuar.');
    }

    public function destroy(Processo $processo) {
        
    }

    public function search() {
        return view('processo.processo_search');
    }

    public function download(Request $request) {
        
        return;
    }
}
