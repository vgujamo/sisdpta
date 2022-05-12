<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProcesso extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        
       
        return [
            'num_processo' => 'required|min:3|max:50',
            'data_entrada' => 'required|min:3|max:50',
            'seccao' => 'required|min:3|max:50',
            'subseccao' => 'required|min:3|max:50',
            'especie' => 'required|min:3|max:50',
            'requerrente' => 'required|min:3|max:50',
            'recorrido' => 'required|min:3|max:50',
            'contaparte' => 'required|min:3|max:50',
            'objecto' => 'required|min:3|max:100',
            'anexo' => 'nullable|file',
            'descricao' => 'nullable|min:5|max:100',
        ];
    }

    public function messages() {
       return [
        'num_processo.required' => 'O campo de processso é obrigatorio',
        'data_entrada.required' => 'O campo data de entrada é obrigatorio',
        'seccao.required' => 'O campo secção é obrigatorio',
        'subseccao.required' => 'O campo subsecção é obrigatorio',
        'especie.required' => 'O campo especie é  obrigatorio',
        'requerrente.required' => 'O campo requerente é obrigatorio',
        'recorrido.required' => 'O campo ecorrido é obrigatorio',
        'contaparte.required' => 'O campo contrapate é obrigatorio',
        'objecto.required' => 'O campo objecto é obrigatorio',
        'anexo.nullable' => 'O campo anexo é obrigatorio',
        'descricao.nullable' => 'O campo é obrigatorio'
        ];
    }

}
