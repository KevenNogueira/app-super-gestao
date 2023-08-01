<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Usuário e ou senha invalidos';
        }

        if ($request->get('erro') == 2) {
            $erro = 'Necessario autenticação para acessar a página';
        }

        return view('site.login', [
            'titulo' => 'Login',
            'erro' => $erro
        ]);
    }

    public function autenticar(Request $request)
    {
        $regas = [
            'email' => 'required',
            'senha' => 'required|min:8'
        ];

        $feedback = [
            'required' => 'Campo de preenchimento obrigatório',
            'senha.min' => 'A senha deve conter no mínimo 8 caracteres'
        ];

        $request->validate($regas, $feedback);

        $email = $request->get('email');
        $senha = $request->get('senha');

        $user = User::where('email', $email)->where('password', $senha)->get()->first();

        if (isset($user->email)) {
            session_start();
            $_SESSION['email'] = $user->email;
            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair()
    {
        session_destroy();
        return redirect()->route('site.index');
    }
}