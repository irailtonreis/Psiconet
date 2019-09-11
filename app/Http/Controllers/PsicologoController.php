<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psicologo;
use App\Plano;

class PsicologoController extends Controller
{
    public function cadastroPsicologo(){
        $planos = Plano::orderBy('id', 'ASC')->get();

        return view('cadastroPsicologo', compact('planos', $planos));   
    }

    public function listarPlanos(){

    }
    public function salvandoPsicologo(Request $request){
        $request->validate([
            "nome" => "required|max:50",
            "telefone" => "required|min:11",
            "cpf" => "required|min:11",
            "crp" => "required",
            "email" => "required",
            "conf-email" => "required",
            "foto"=> "required",
            "plano" => "required",
            "senha" =>"required",
            "conf-senha"=> "required"
        ], [
            "nome.required"=>'O campo nome é obrigatório',
            "cpf.required"=>'O campo CPF é obrigatório',
            "crp.required"=>'O campo CRP é obrigatório',
            "telefone.required"=>'O campo telefone é obrigatório',
            "email.required"=>'O campo email é obrigatório',
            "conf-email.required"=>'O campo confirme seu email é obrigatório',
            "foto.required"=>'O campo foto é obrigatório',
            "plano.required"=>'O campo plano é obrigatório',
            "senha.required"=>'O campo senha é obrigatório',
            "conf-senha.required"=>'O campo confirme sua senha é obrigatório'

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
            // "usuario" => $request->input("usuario"),
            "crp" => $request->input("crp"),
            "cpf" => $request->input("cpf"),
            "email" => $request->input("email"),
            "telefone" => $request->input("telefone"),
            "foto"=> $caminhoRelativo,
            "senha" => $request->input("senha"),
            "id_plano"=> $request->option("value")
        ]);

        $psicologo->save();
        
       return redirect('/psicologoLogado');
        
    }
}
