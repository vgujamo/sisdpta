<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePessoa extends FormRequest {

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

    /*
      public function messages() {
      return [
      'nome.required' => 'O Campo :Nome é Obrigatório',
      'apelido.required' => 'O campo: Apelido é obrigatorio!',
      'sexo.nullable' => 'O campo: Sexo é obrigatorio!',
      'pai.required' => 'O campo: Pai é obrigatorio!',
      'mae.required' => 'O campo: Mãe obrigatorio!',
      'estado_civil.required' => 'O campo: Estado Civil é obrigatorio!',
      'data_nasc.required' => 'O campo: Data de Nascimento é obrigatorio!',
      'pais_id.required' => 'O campo: Nacionalidade é obrigatorio!',
      'provincia_id.required' => 'O campo: Provincia é obrigatorio!',
      'distrito_id.required' => 'O campo: Distrito é obrigatorio!',
      'bairro.required' => 'O campo: Bairro é obrigatorio!',
      'casa.required' => 'O campo: Nº de casa é obrigatorio!',
      'quart.required' => 'O campo: Quarteirão é obrigatorio!',
      'rua.required' => 'O campo: Rua é obrigatorio!',
      'email.required' => 'O campo: email é obrigatorio!',
      'contacto1.required' => 'O campo: Contacto é obrigatorio!',
      'tipo_doc.required' => 'O campo: Tipo de Documento é obrigatorio!',
      'num_doc.required' => 'O campo: Numero do Documento é obrigatorio!',
      'nuit.required' => 'O campo: NUIT é obrigatorio!'
      ];
      }
     * 
     */
}
