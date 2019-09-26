<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psicologo;
use App\Plano;
use App\User;
class PsicologoController extends Controller
{
    public function cadastroPsicologo(){
        $planos = Plano::orderBy('id', 'ASC')->get();

        return view('cadastroPsicologo', compact('planos', $planos));   
    }
        public function concluirCadastroPsicologo(){
            if(auth()->user()->type = 1){
                $planos = Plano::orderBy('id', 'ASC')->get();
                return view('concluirCadastroPsicologo', compact('planos', $planos));
            }
        }

    public function psicologoLogado(){
        
        if(auth()->user()){
        $iduser = auth()->user()->id;
        $user = User::find(auth()->user()->id);
        $psicologo = Psicologo::where('id_user', $iduser)->first();
       
        // $estados = State::orderBy('id', 'ASC')->get();
    
        return view('/psicologoLogado', compact('psicologo', 'user'));
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
        if ($psicologo){
            return redirect('/psicologoLogado')->with('success', 'Cadastro finalizado com sucesso!');
        }else{
            return redirect()->back()->with('error', 'Falha ao inserir');
        }
    }

    public function editarCadastroPsicologo($id){
        $planos = Plano::orderBy('id', 'ASC')->get();
        $psicologo = Psicologo::where('id_user', $id)->first();
        return view('editarCadastroPsicologo', compact('planos', 'psicologo'));
    }
    public function alterarCadastroPsicologo(Request $request, $id){
        $psicologo = Psicologo::find($id);
        
        $user = User::find(auth()->user()->id);
    
        $request->validate([
            "nome" => "required",
            "email" => "required",
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
        if($_REQUEST){
            $user->name = $request->input('nome');
            $user->email = $request->input('email');
        }

        $psicologo->save();
        $user->save();   

        if($psicologo && $user){
            return redirect('/psicologoLogado')->with('success', 'Cadastro editado com sucesso!');
        }else{
            return back()->with('error', 'Falha ao editar cadastro');
        }

       

    }
    public function removendoPsicologo($id){

        $psicologo = Psicologo::where('id_user', $id)->first();
        $user = User::find($id);

        $deleteP = $psicologo->delete();
        $deleteU =  $user->delete();

        if($deleteP && $deleteU){
            return redirect('/');
        }else{
            return "Erro ao deletar";
        }

    }
}
