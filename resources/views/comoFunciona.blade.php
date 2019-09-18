@extends('layouts.master')
@section('title', 'Como Funciona')

@section('content')
<div class="container pt-5 mt-5">
    <div class="row pb-2">
        <h1>Como Funciona</h1>
    </div>
    <div class=" pt-3 pb-1">
        <div class="py-5 text-center">
            <img src="" alt="">
            <h3 class="m-auto">Como podemos ajudar você?</h3>
            <p> Respondemos as principais dúvidas do pessoal :)
                Esperamos ajudar você! </p>
            <p>Clique em uma das opções para seguir:</p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 d-flex flex-column justify content-center align-items-center">
                <a class="btn btn-secondary" href="/faqCliente" role="button"><img class="py-2"
                        src="{{url('img/cliente-faq.png')}}" width="200" height="200" alt=""></a>
                <h3>Sou Cliente</h3>
            </div>
            <div class="col-lg-4 d-flex flex-column justify content-center align-items-center">
                <a class="btn btn-secondary" href="/faqPsicologo" role="button"><img class="py-2"
                        src="{{url('img/listener.png')}}" width="200" height="200" alt=""></a>
                <h3>Sou Psicólogo</h3>
            </div>
        </div>
        @endsection
