<?php

namespace App\Http\Controllers;
use App\Models\{
    Pessoa,
    Juiz,
    Pais,
    Provincia,
    Distrito,
    Seccao,
    SubSeccao,
    Especie,
    Processo,
};
use Illuminate\Http\Request;
use \App\Http\Requests\StoreUpdateJuiz;
use DB;

class JuizController extends Controller {

    private $juiz;

    function __construct(Juiz $juiz) {
        $this->juiz = $juiz;
    }

    public function index() {
        $juizes = $this->juiz->with('pessoa')->latest()->paginate(5);
        return view('juiz.juiz_list', compact('juizes'));
    }

    public function create() {
        $paises = Pais::get();
        $provincias = Provincia::get();
        $distritos = Distrito::get();
        $seccoes = Seccao::get();
        $subseccoes = SubSeccao::get();
        $pessoas = Pessoa::latest()->get();

        return view('juiz.juiz_create', compact('seccoes', 'subseccoes', 'pessoas', 'paises', 'provincias', 'distritos'));
    }

    public function store(StoreUpdateJuiz $request) {
        
        dd($data = $request->all());
        
        $pessoa = Pessoa::create($data);
        $insert = $pessoa->juiz()->create($data);
        if ($insert) {
            return redirect()->route('juiz.juiz_list')->with('messageicon', 'success')
                            ->with('message', 'Dados gravados com sucesso!')
                            ->with('txtmessage', 'Clique OK para continuar.');
        }
    }

    public function show($id) {
        if (!$juiz = Juiz::find($id)) {
            return redirect()->route('juiz.juiz_list');
        }
        return view('juiz.juiz_details', compact('juiz'));
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }

}
