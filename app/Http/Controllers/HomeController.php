<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Psicologo;
use App\Cliente;
use App\plano;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
       
        if(auth()->user()->type == 0){ 
            
            $iduser = auth()->user()->id;
           
            $cliente = Cliente::where('id_user', $iduser)->first();

            if($cliente){
                return view('clienteLogado');
            } else {
                return view('concluirCadastroCliente');
            }
            
        }elseif(auth()->user()->type == 1){

            $iduser = auth()->user()->id;
           
            $psicologo = Psicologo::where('id_user', $iduser)->first();
           
            if($psicologo){
                return view('/psicologoLogado', compact('psicologo', $psicologo));
            }else{
                $planos = Plano::orderBy('id', 'ASC')->get();
                return view('concluirCadastroPsicologo', compact('planos', $planos));
            }

        }
    }
}
