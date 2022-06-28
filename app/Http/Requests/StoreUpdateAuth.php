<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\StoreUpdateAuth;
use App\Models\Admin;

class StoreUpdateAuth extends FormRequest {

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
            'nome' => 'required',
            'email' => 'required|email|unique:admins',
            'senha' => 'required|min:6|max:12',
        ];
    }
    
    public function attributes() {
        return [
            'nome' => 'usuario',
            'email' => 'endereco de emai;l',
            'senha' => 'senha',
        ];
        
    }

    public function messages() {
        return [
            'nome.required' => 'O Campo :Nome é Obrigatório',
            'email.required' => 'O Campo :email é Obrigatório',
            'email.unique' => 'Email ja registado',
            'senha.required' => 'O Campo :senha é Obrigatório',
            'senha.min' => 'A senha deve possuir no minimo 6 caracteres',
        ];
    }

}
