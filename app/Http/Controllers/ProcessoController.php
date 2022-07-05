<?php

namespace App\Http\Controllers;

use App\Models\{
    Pessoa,
    Funcionario,
    Processo,
    Seccao,
    SubSeccao,
    Especie,
    Parecer,
};
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use livewire\WithFileUploads;
use App\Http\Requests\StoreUpdateProcesso;
use DB;

class ProcessoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $processos = Processo::latest()->paginate(10)->withQueryString()->fragment('processos');
        return view('processo.processo_list', compact('processos'));
    }

    public function create() {
        $seccoes = Seccao::get();
        $subseccoes = SubSeccao::get();
        $especies = Especie::get();
        $pareceres = Parecer::get();
        //$especie1 = Especie::get();

        return view('processo.processo_create', compact('seccoes', 'subseccoes', 'especies', 'pareceres'));
    }

    public function store(StoreUpdateProcesso $request) {

        try {
            DB::beginTransaction();
            $processo = Processo::create($request->all());

            if ($request->anexos) {
                foreach ($request->anexos as $anexo) {
                    $processo->anexos()->create([
                        'nome' => $anexo->getClientOriginalName(),
                        'descricao' => Str::of($request->num_processo)->slug('-'),
                        'ext' => $anexo->guessClientExtension(),
                        'tamanho' => $anexo->getSize(),
                        'url' => $anexo->store('processos'),
                    ]);
                }
            }

            $processo->pareceres()->create([
                'nome' => $request->parecer,
                'processo' => $processo->id,
                'descricao_parecer' => $request->descricao_parecer,
                'user' => 'N/A', #auth()->user()->id,
            ]);
            DB::commit();
            return redirect()->route('processo.processo_list')
                            ->with('messageicon', 'success')
                            ->with('message', 'Dados Inseridos com sucesso!')
                            ->with('txtmessage', 'Clique OK para continuar.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back();
        }
    }

    public function show($id) {

        if (!$processo = Processo::with('anexos')->find($id)) {
            return redirect()->back();
        }
        return view('processo.processo_details', compact('processo'));
    }

    public function edit($id) {
        $seccoes = Seccao::get();
        $subseccoes = SubSeccao::get();
        $especies = Especie::get();
        $pareceres = Parecer::get();
        if (!$processo = Processo::find($id)) {
            return redirect()->back();
        }
        return view('processo.processo_edit', compact('processo', 'seccoes', 'subseccoes', 'especies', 'pareceres'));
    }

    public function update(StoreUpdateProcesso $request, $id) {
        if (!$processo = Processo::find($id)) {
            return redirect()->back();
        }
        try {
            return \Illuminate\Support\Facades\DB::transaction(function () use ($request) {
                        $processo = Processo::update($request->all());

                        if ($request->anexos) {


                            foreach ($request->anexos as $anexo) {
                                $processo->anexos()->create([
                                    'nome' => $anexo->getClientOriginalName(),
                                    'descricao' => Str::of($request->num_processo)->slug('-'),
                                    'ext' => $anexo->guessClientExtension(),
                                    'tamanho' => $anexo->getSize(),
                                    'url' => $anexo->store('processos'),
                                ]);
                            }
                        }
                        return redirect()->route('processo.processo_list')
                                ->with('messageicon', 'success')
                                ->with('message', 'Dados Actualizados com sucesso!')
                                ->with('txtmessage', 'Clique OK para continuar.');
                    });
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id) {
        if (!$processo = Processo::find($id))
            return redirect()->route('processo.processo_list');
        $processo->delete();
        return redirect()->route('processo.processo_list');
    }

    public function search(Request $request) {
        $processos = Processo::where('num_processo', 'LIKE', "%{$request->search}%") //pesquisar pelo numero de processo
                ->paginate(5);
        return view('processo.processo_list', compact('processos'));
    }

    public function getParecer($id) {
        $parecer = Processo::where('parecer_id', $id)->get(['nome', 'id']);

        return response()->json($parecer);
    }

    public function download() {

        return respnse()->download(public_path('processos/' . $anexo));
    }

    public function validar() {
        return view('processo.processo_validar');
    }

}
