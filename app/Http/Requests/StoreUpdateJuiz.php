<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateJuiz extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'pesidente' => 'required|min:1|max:50',
            'seccao_id' => 'required|min:1|max:50',
            'subseccao_id' => 'required|min:1|max:50',
            'descricao' => 'nullable|min:2|max:50',
            'data_inicial' => 'required|min:2|max:50',
            'data_final' => 'required|min:2|max:50',
            'nome' => 'required|min:2|max:50',
            'apelido' => 'required|min:2|max:50',
            'sexo' => 'nullable',
            'pai' => 'required|min:2|max:60',
            'mae' => 'required|min:2|max:60',
            'estado_civil' => 'required|max:20',
            'data_nasc' => 'required',
            'pais_id' => 'required|min:1|max:30',
            'provincia_id' => 'required|max:30',
            'distrito_id' => 'required|max:30',
            'bairro' => 'required|max:30',
            'casa' => 'required|max:20',
            'quart' => 'required|max:20',
            'rua' => 'required|min:1|max:10',
            'email' => 'required|min:1|max:50',
            'contacto1' => 'required|min:1|max:20',
            'contacto2' => 'nullable|min:1|max:20',
            'tipo_doc' => 'required|min:1|max:30',
            'num_doc' => 'required|min:1|max:50',
            'nuit' => 'required|min:1|max:20',
            'pesidente' => 'required',
        ];
    }

    public function attributes() {
        return [
            'pai' => 'nome do Pai',
            'mae' => 'nome do Mãe',
            'data_nasc' => 'data de nascimento',
            'pais_id' => 'Pais',
            'provincia_id' => 'Provincia',
            'distrito_id' => 'Distrito',
            'casa' => 'N da casa',
            'quart' => 'quarteirão',
            'contacto1' => 'contacto',
            'contacto2' => 'contacto alternativo',
            'tipo_doc' => 'tipo de documento',
            'num_doc' => 'numero de documento',
        ];
    }

}
