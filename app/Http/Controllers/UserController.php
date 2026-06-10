<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request){

        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
            ],
            [
                'required' => 'O campo :attribute é obrigatório.',
                'email' => 'Digite um :attribute válido.',
                'min' => 'O campo :attribute deve ter pelo menos :min caracteres.',
                'confirmed' => 'As senhas não coincidem.',
            ],
            [
                'name' => 'nome',
                'email' => 'e-mail',
                'password' => 'senha',
            ]
        );
        
        $user = new User();
        $user->name = $request -> name;
        $user->email = $request -> email;
        $user->password = $request -> password;
        $user->save();
       // return redirect("/");

    }//fim do store
}
