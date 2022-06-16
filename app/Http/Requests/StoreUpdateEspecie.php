<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEspecie extends FormRequest {

        public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'seccao_id' => 'required|min:1|max:2',
            'subseccao_id' => 'required|min:1|max:2',
            'nome' => 'required|min:4|max:100',
            'descricao' => 'nullable|min:5|max:100',
        ];
    }

    public function messages() {
        return [
            'seccao_id.required' => 'Selecione a Secção',
            'subseccao_id.required' => 'Selecione a SubSecção',
            'nome.required' => 'O campo nome da Especie é Obrigatório',
            'descricao.nullable' => 'O campo nome da Especie é opcional',
            'descricao.min' => 'O campo nome descrição deve ter no mínimo 5 caracteres',
        ];
    }

}
