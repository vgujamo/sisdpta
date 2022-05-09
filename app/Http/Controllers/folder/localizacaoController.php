<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class localizacaoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function view() {
        $paises = DB::table('pais')
                ->get();
        
        return view();
    }
    public function getPaises() {
        $paises = DB::table('pais')
                ->get();
        return $paises;
    }
    
    public function getProvincias(Request $Request) {
        $provincias = DB::table('provincias')
                ->where('pais_id', $request->pais_id)
                ->get();
        if (count($provincias) > 0) {
            return response()->json($provincias);
        }
    }
    
    public function getDistritos(Request $Request) {
        $distritos = DB::table('distritos')
                ->where('provincia_id', $request->provincia_id)
                ->get();
        if (count($distritos) > 0) {
            return response()->json($distritos);
        }
    }
    
    public function index() {
        
    }

    public function create() {
        //
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
        //
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
