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
            "nome" => "required",
            "usuario" => "required",
            "cpf" => "required",
            "telefone" => "required",
            "email" => "required",
            "crp" => "required",
            "foto" => "required",
            "senha" => bcrypt('senha')
        ]);


        $psicologo = Psicologo::create([
            "nome" => "required",
            "usuario" => "required",
            "cpf" => "required",
            "telefone" => "required",
            "email" => "required",
            "crp" => "required",
            "senha" => bcrypt('senha')
        ]);

        $psicologo->save();
        
        redirect('/index');
        
    }
}
