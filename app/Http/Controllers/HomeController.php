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
            $cliente = Cliente::find(auth()->user()->id);

            if(isset($cliente->id_user)){
                return view('clienteLogado');
            } else {
                return view('concluirCadastroCliente');
            }
            
        }elseif(auth()->user()->type == 1){
            $iduser = auth()->user()->id;
            // dd($iduser); 
            $verifica = Psicologo::select('id')->where('id_user', '=' , $iduser)->get();
            //  $verifica = Psicologo::select('id')->where($iduser , '=' , 'id_user')->get();

            $planos = Plano::orderBy('id', 'ASC')->get();
            $user = Auth::user();
            if($verifica){
                return view('concluirCadastroPsicologo', compact('planos', $planos, 'user', $user));
            }else{
                return view('psicologoLogado');
            }

        }
    }
}
