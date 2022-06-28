<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEspecie extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'nome' => 'required|min:4|max:100',
            'seccao_id' => 'required|min:1|max:2',
            'subseccao_id' => 'required|min:1|max:2',
            'descricao' => 'nullable|min:5|max:100',
            'user_id' => 'nullable|min:1|max:10',
        ];
    }

    public function attributes() {
        return[
            'nome' => 'nome da especia',
            'seccao_id' => 'seccao',
            'subseccao_id' => 'subseccao',
            'descricao' => 'descricao da especie',
            'user_id' => 'user',
        ];
    }

    /*
      public function messages() {
      return [
      'seccao_id.required' => 'Selecione a Secção',
      'subseccao_id.required' => 'Selecione a SubSecção',
      'nome.required' => 'O campo nome da Especie é Obrigatório',
      'descricao.nullable' => 'O campo nome da Especie é opcional',
      'descricao.min' => 'O campo nome descrição deve ter no mínimo 5 caracteres',
      ];
      }

     * 
     *  */
}
