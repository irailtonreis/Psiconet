<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psicologo;

class PsicologoController extends Controller
{
    public function cadastroPsicologo(){
        return view('cadastroPsicologo');
    }
    public function salvandoPsicologo(Request $request){
        $request->validate([
            "nome" => "required|max:50",
            "usuario" => "required|max:50",
            "cpf" => "required|max:50",
            "telefone" => "required|max:50",
            "email" => "required|max:50",
            "crp" => "required|max:50",
            "foto"=> "required",
            "senha" =>"required"
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

        $psicologo = Psicologo::create([
            "nome" => $request->input("nome"),
            "usuario" => $request->input("usuario"),
            "crp" => $request->input("crp"),
            "cpf" => $request->input("cpf"),
            "email" => $request->input("email"),
            "telefone" => $request->input("telefone"),
            "foto"=> $caminhoRelativo,
            "senha" => $request->input("senha"),
            "id_plano"=> 1
        ]);

        $psicologo->save();
        
        redirect('/psicologoLogado');
        
    }
}
