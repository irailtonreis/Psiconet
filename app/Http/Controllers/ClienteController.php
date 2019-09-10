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
            "nome" => "required",
            "usuario" => "required",
            "cpf" => "required",
            "telefone" => "required",
            "email" => "required",
            "conf-email" => "required",
            "password" => "required",
            "conf-password" => "required"
        ]);
        

        $cliente = Cliente::create([
            "nome" => $request->input("nome"),
            "usuario" => $request->input("usuario"),
            "email" => $request->input("email"),
            "senha" => $request->input("password"),
            "cpf" => $request->input("cpf"),
            "telefone" => $request->input("telefone")
        ]);

        $cliente->save();

        return redirect('/cadastroCliente');
    }
        
}
