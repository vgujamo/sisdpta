<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Funcionario,
    Pessoa,
    Pais,
    Provincia,
    Distrito,
};

class CountryDataController extends Controller {

    public function index() {
        
    }

    public function getProvincia($id) {
        $provincias = Provincia::where('pais_id', $id)->get(['nome', 'id']);
//        dd($provincias);
        //Quando queres usar javascript or uma api
        return response()->json($provincias);
        // Quando queres usar teus ficheitos
//         return view('provincias', compact('provincias'));
    }

    public function getDistrito($id) {
        $distritos = Distrito::where('provincia_id', $id)->get(['nome', 'id']);
        return response()->json($distritos);
    }

}
