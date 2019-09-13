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
            "cpf" => "required|min:11",
            "telefone" => "required|min:11",
            "email" => "required",
            "conf-email" => "required",
            "senha" => "required",
            "conf-senha" => "required"
        ],[
            "nome.required"=>'O campo nome é obrigatório',
            "usuario.required"=>'O campo usuário é obrigatório',
            "cpf.required"=>'O campo CPF é obrigatório',
            "telefone.required"=>'O campo telefone é obrigatório',
            "email.required"=>'O campo email é obrigatório',
            "conf-email.required"=>'O campo confirme seu email é obrigatório',
            "senha.required"=>'O campo senha é obrigatório',
            "conf-senha.required"=>'O campo confirme sua senha é obrigatório'

        ]);
        
        // $arquivo = $request->file('foto');

        //if (empty($arquivo)) {
        //    abort(400, 'Nenhum arquivo foi enviado');
        //}

    //    $nomePasta = "uploads";

    //    $arquivo->storePublicly($nomePasta);

    //    $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

    //  $nomeArquivo = $arquivo->getClientOriginalName();

    //    $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

    //    $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $clientes = Cliente::create([
            "nome" => $request->input("nome"),
            "usuario" => $request->input("usuario"),
            "cpf" => $request->input("cpf"),
           "telefone" => $request->input("telefone"),
            "email" => $request->input("email"),
            "senha" => $request->input("senha"),
            "foto" => $request->input("foto")
        ]);

        $clientes->save();

        return redirect('/cadastroCliente');
    }
        
}
