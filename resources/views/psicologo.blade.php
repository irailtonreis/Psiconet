@extends('layouts.master')
@section('content')
<div class="container py-5 mt-5">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-lg-6 py-3 m-auto">
                <div class="single-team-member">
                    <div class="pt-5">
                        <img src="{{url($psicologo->foto)}}" class="w-75" alt="team">

                    </div>
                    <div class="team-member-info d-flex flex-column flex-1">
                        <a href="">
                            <h4>{{$psicologo->user->name}}</h4>
                            <p>{{"R$ ".$psicologo->valor_sessao.",00"}}</p>
                        </a>
                        <span>{{$psicologo->descricao}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <div class="py-3 col-md-5">
                <button id="marcar-consulta" onclick="event.preventDefault()"
                    class="btn btn-primary bg-primary border-primari text-white w-100" data-toggle="modal"
                    data-target="#modal{{$psicologo->id}}">Marcar consulta
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal{{$psicologo->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="modal-title w-100 d-flex align-items-center justify-content-center">
                    <img src="{{url('img/logo.png')}}" alt="">
                    <h2>PSICONET</h2>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center pb-3">Selecione uma data para atendimento<h4>
                        <div class="container">
                            <div class="d-flex flex-column align-items-center">
                                <form action="/consulta/{{ Auth::user()->id }}" method="POST">
                                    @csrf{{ method_field('POST') }}
                                    <input class="mb-5" id="date" type="date" name="data">
                                    <input class="form-control" type="hidden" name="psicologo_id" value="{{$psicologo->id}}">
                                    <input class="form-control" type="hidden" name="valor_consulta" value="{{$psicologo->valor_sessao}}">
                                    <div class="row">
                                        <div class="col-md-6 col-12 py-1">
                                        <button type="submit" class="btn btn-primary bg-primary text-white w-100"
                                            style="padding: .375rem .75rem; font-size: .9rem; line-height: 1.6;">
                                            Confirmar
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-12 w-100 py-1">
                                    <button onclick="event.preventDefault()"
                                        class="btn btn-primary bg-transparent border-danger text-danger w-100"
                                        data-dismiss="modal">Cancelar</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                <div class="modal-footer d-flex align-items-center justify-content-center">
                <p class="">Copyright &copy; Psiconet 2019</p>
            </div>
        </div>
    </div>
</div>
@endsection