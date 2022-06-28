<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateAuth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AutenticaController extends Controller {

    function login() {
        return view('auth.login');
    }

    function cadastrar() {
        //return 'Ola tudo bem';
        return view('auth.cadastrar');
    }

    function gravar(StoreUpdateAuth $request) {

        //return $request->Input();
        $admin = new Admin;
        $admin->nome = $request->nome;
        $admin->email = $request->email;
        $admin->senha = Hash::make($request->senha);

        $save = $admin->save();

        if ($save) {
            return back()->with('success', 'Novo usuario cadastrado com Sucesso');
            return redirect()->route('home');
        } else {
            return back()->with('fail', 'Algo deu errado');
        }
    }

    function check(Request $request) {

        $userInfo = Admin::where('nome', '=', $request->nome)->first();
        if (!$userInfo) {
            return back()->with('fail', 'Nao reconhecemos seu username');
        } else {
            if (Hash::check($request->senha, $userInfo->senha)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('home');
            } else {
                return back()->with('fail', 'Senha ou usuario invalidos!');
            }
        }
    }

    function logout() {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUserInfo');
            return redirect('/auth/login');
        }
    }

    function home() {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('home', $data);
    }

}
