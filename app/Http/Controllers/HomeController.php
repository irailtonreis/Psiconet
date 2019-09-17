<?php

namespace App\Http\Controllers;
use App\Psicologo;
use App\Cliente;
use App\plano;
use Illuminate\Http\Request;

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
            $cliente = Cliente::find(auth()->user()->id);

            if(isset($cliente->id_user)){
                return view('clienteLogado');
            } else {
                return view('concluirCadastroCliente');
            }
            
        }elseif(auth()->user()->type == 1){
            $planos = Plano::orderBy('id', 'ASC')->get();
          
            return view('concluirCadastroPsicologo', compact('planos', $planos));

        }
    }
}
