<?php

namespace App\Http\Controllers;
use App\Psicologo;
use App\Cliente;

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
            return view('clienteLogado');
            
        }elseif(auth()->user()->type == 1){
            return view('psicologoLogado');
        }
    }
}
