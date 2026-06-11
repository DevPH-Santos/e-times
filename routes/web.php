<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rota de exemplo: Enviando dados do PHP para o blade(view)
Route::get('/', function (Request $request) {
    $nome = $request->nome ?? "Pedro Santos";
    return view('inicial', ["nombre"=>$nome]);
});
Route::post('/', function(Request $request){
    $nome = $request->nome ?? "Pedro Santos";
    return view('inicial', ["nombre"=>$nome]);
});


//Sobre
Route::get('/sobre', function(){
    return view('sobre');
});


//Cadastro
Route::get('/sign-up', function(){
    return view('Auth/signUp');
});
Route::post('/sign-up', [UserController::class, 'store']);
Route::get('/sign-in', function(){
    return view('Auth/signIn');
});


//Materials

//Listar dados do material nos campos
Route::get('/materials/new',[MaterialController::class, 'create']);

//Cadastrar Materiais
Route::post('/materials/new',[MaterialController::class, 'store']);

//Listar Materiais
Route::get('/materials',[MaterialController::class, 'index']);

//Listar dados do material nos campos
Route::get('/materials/edit/{id}', [MaterialController::class, 'edit']);

//Atualizar os dados novos no banco de dados
Route::put('/materials/edit/{id}', [MaterialController::class, 'update']);

Route::delete('/materials/delete/{id}', [MaterialController::class, 'destroy']);