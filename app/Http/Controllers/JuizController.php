<?php

namespace App\Http\Controllers;

use App\Models\{
    Pessoa,
    Funcionario,
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

class JuizController extends Controller {

    private $juiz;

    function __construct(Funcionario $juiz) {
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
        $pessoas = Pessoa::latest()->get();
        $seccoes = Seccao::get();
        $subseccoes = SubSeccao::get();
        $especies = Especie::get();
        return view('juiz.juiz_create', compact('seccoes', 'especies', 'subseccoes', 'pessoas', 'paises', 'provincias', 'distritos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
         if (!$juiz = Juiz::find($id)) {
            return redirect()->route('juiz.juiz_list');
        }
        return view('juiz.juiz_details', compact('juiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
