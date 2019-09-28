<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Psicologo;
use App\Cliente;
use App\plano;
use App\User;
// use App\Estate;
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
                $psicologos = Psicologo::all();
                $psicologos = Psicologo::orderBy('id', 'ASC')->get();
                // dd($psicologo);
                return view('clienteLogado',  compact('cliente', $cliente, 'psicologos', $psicologos));
            } else {
                return view('concluirCadastroCliente');
            }
            
        }elseif(auth()->user()->type == 1){

            $iduser = auth()->user()->id;
            $user = User::find(auth()->user()->id);
            $psicologo = Psicologo::where('id_user', $iduser)->first();
            if($psicologo){
                return view('/psicologoLogado', compact('psicologo', 'user'));
            }else{
                $planos = Plano::orderBy('id', 'ASC')->get();
                return view('concluirCadastroPsicologo', compact('planos'));
            }

        }
    }
}
