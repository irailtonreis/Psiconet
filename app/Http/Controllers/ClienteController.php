<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function cadastroCliente(){

        return view('cadastroCliente');
    }

    public function salvandoCliente(Request $request){
        $request->validate([

        ]);

    }

    public function salvandoFilme(Request $request){
        $request->validate([
            "nome" => "required",
            "usuario" => "required",
            "email" => "required",
            "senha" => "required",
            "cpf" => "required",
            "telefone" => "required",
            "foto" => "required"
        ]);
}
