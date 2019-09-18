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
            "usuario" => "required",
            "cpf" => "required|min:11",
            "telefone" => "required|min:11",
            "id_user" => "required"
        ],[
            "usuario.required"=>'O campo usuário é obrigatório',
            "cpf.required"=>'O campo CPF é obrigatório',
            "telefone.required"=>'O campo telefone é obrigatório',
            "id_user.required"=>'O campo email é obrigatório'

        ]);
        
        $arquivo = $request->file('foto');

        if (empty($arquivo)) {
           abort(400, 'Nenhum arquivo foi enviado');
        }

       $nomePasta = "uploads";

       $arquivo->storePublicly($nomePasta);

       $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

     $nomeArquivo = $arquivo->getClientOriginalName();

       $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

       $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $clientes = Cliente::create([
            "usuario" => $request->input("usuario"),
            "cpf" => $request->input("cpf"),
            "telefone" => $request->input("telefone"),
            "id_user" => $request->input("id_user"),
            "foto" => $caminhoRelativo
        ]);

        $clientes->save();

        return redirect('/clienteLogado');
    }
        
}
