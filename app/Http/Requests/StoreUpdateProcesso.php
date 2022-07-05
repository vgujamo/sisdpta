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
            'seccao_id' => 'required|min:1|max:2',
            'subseccao_id' => 'required|min:1|max:2',
            'especie_id' => 'required|min:1|max:2',
            'requerrente' => 'required|min:3|max:50',
            'recorrido' => 'nullable|min:3|max:50',
            'contaparte' => 'required|min:3|max:50',
            'objecto' => 'required|min:3|max:100',
            'anexo.*' => 'mimes:pdf',
            'despacho_id' => 'nullable|min:1|max:100',
            'parecer' => 'required',
            'descricao_parecer' => 'nullable|min:5|max:100',
        ];
    }

    public function attributes() {
        return [
            'num_processo' => 'numero de processo',
            'data_entrada' => 'data de entrada',
            'seccao_id' => 'seccao',
            'subseccao_id' => 'subseccao',
            'especie_id' => 'especie',
            'objecto' => 'objecto do processo',
        ];
    }

    /*
      public function messages() {
      return [
      'num_processo.required' => 'O campo de processso é obrigatorio',
      'num_processo.unique' => 'O numero de processo ja existe',
      'data_entrada.required' => 'O campo data de entrada é obrigatorio',
      'seccao_id.required' => 'O campo secção é obrigatorio',
      'subseccao_id.required' => 'O campo subsecção é obrigatorio',
      'especie_id.required' => 'O campo especie é  obrigatorio',
      'requerrente.required' => 'O campo requerente é obrigatorio',
      'recorrido.nullable' => 'O campo ecorrido é opcional',
      'contaparte.required' => 'O campo contrapate é obrigatorio',
      'objecto.required' => 'O campo objecto é obrigatorio',
      'parecer_id.required' => 'O campo parecer é obrigatorio',
      'descricao.nullable' => 'O campo é opcional',
      ];
      }
     * 
     */
}
