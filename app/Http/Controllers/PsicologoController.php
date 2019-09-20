<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psicologo;
use App\Plano;
use App\State;
use App\User;
class PsicologoController extends Controller
{
    public function cadastroPsicologo(){
        $planos = Plano::orderBy('id', 'ASC')->get();

        return view('cadastroPsicologo', compact('planos', $planos));   
    }

    public function psicologoLogado(){
        
        if(auth()->user()){
        // $user = User::find(auth()->user()->id);
        $psicologo = Psicologo::find(auth()->user()->id);
        // $estados = State::orderBy('id', 'ASC')->get();
    
        return view('/psicologoLogado', compact('psicologo', $psicologo));
         // return view('/psicologoLogado')->with(['user' => $user]);
        // return view ('psicologoLogado', compact('psicologo', 'estados', $psicologo, $estados));
        }
       
    }

    public function salvandoPsicologo(Request $request){
        $request->validate([
            "foto"=> "required",
            "cpf" => "required",
            "telefone" => "required",
            "cidade" => "required",
            "crp" => "required",
            'valor_sessao'=>'required',
            "plano" => "required",
            "sobre" =>"required",
        ], [
            "foto.required"=>'O campo foto é obrigatório',
            "cpf.required"=>'O campo CPF é obrigatório',
            "telefone.required"=>'O campo telefone é obrigatório',
            "cidade.required"=>'O campo cidade é obrigatório',
            "crp.required"=>'O campo CRP é obrigatório',
            "plano.required"=>'O campo plano é obrigatório',
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
            "foto"=> $caminhoRelativo,
            "cpf" => $request->input("cpf"),
            "telefone" => $request->input("telefone"),
            "cidade" => $request->input("cidade"),
            "crp" => $request->input("crp"),
            "valor_sessao"=> $request->input('valor_sessao'),
            "sobre"=> $request->input('sobre'),
            "id_plano"=> $request->input("plano"),
            "id_user"=> $request->input("user")
        ]);
        $psicologo->save();
        
    
      
       return redirect('psicologoLogado');
        
    }
    public function editarCadastroPsicologo($id){
        $planos = Plano::orderBy('id', 'ASC')->get();
        $psicologo = Psicologo::find($id);
        $plano = Plano::find($psicologo->id_plano);
        return view('editarCadastroPsicologo', compact('planos', 'psicologo', 'plano'));
    }
    public function alterarCadastroPsicologo(Request $request, $id){
        $psicologo = Psicologo::find($id);

        $request->validate([
            "cpf" => "required",
            "telefone" => "required",
            "cidade" => "required",
            "crp" => "required",
            'valor_sessao'=>'required',
            "plano" => "required",
            "sobre" =>"required",
        ]);
        if($request->hasFile('foto')){

            $arquivo = $request->file('foto');
    
            $nomePasta = "uploads";
    
            $arquivo->storePublicly($nomePasta);
    
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
    
            $nomeArquivo = $arquivo->getClientOriginalName();
    
            $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";
    
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            
            $psicologo->foto = $caminhoRelativo;
        }

        
        
        $psicologo->cpf = $request->input('cpf');
        $psicologo->telefone= $request->input('telefone');
        $psicologo->cidade= $request->input('cidade');
        $psicologo->crp= $request->input('crp');
        $psicologo->valor_sessao= $request->input('valor_sessao');
        $psicologo->id_plano= $request->input('plano');
        $psicologo->sobre= $request->input('sobre');

        $psicologo->save();

        return redirect('psicologoLogado');

    }
}
