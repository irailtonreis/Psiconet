@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="cadastro text-center py-3">
            <h2>Concluir cadastro</h2>
        </div>
        <form method="POST"  action="/salvandoCliente" class="py-3" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}
            <ul class="nav nav-tabs">
                <li class="active  list-cadastro w-100 text-center" id="list1"><a data-toggle="tab" href="#home" class="py-1  px-3 d-block w-100 h-100">Editar Perfil</a></li>
            </ul>
            <div class="tab-content pt-3">
                <div id="home" class="tab-pane fade in active">
                    <div class="row">
                        <div class="form-group w-100 d-flex flex-wrap align-items-center">
                            <div class="col-lg-12 pull-lg-12 text-center">
                            {{-- <img src="{{$psicologo->foto}}" class="m-x-auto img-fluid rounded-circle" alt="avatar" /> --}}
                                <h6 class="m-t-2 py-3">Carregar foto de Perfil</h6>
                                <label class="custom-file w-50 py-2" {{ $errors->has('foto') ? ' has-error' : '' }} >
                                <input type="file" id="file" name="foto" class="custom-file-input">
                                <span class="custom-file-control">Escolher arquivo</span>
                                <small class="text-danger">{{ $errors->first('foto') }}</small>
                                </label>
                        </div>
                            <div class="col-md-12 col-sm-12">
                                <p>Nome</p>
                                <input class="form-control form-control-lg" type="text" id="input-nome" name="nome"
                                    value="{{auth()->user()->name}}">
                            </div>
                        </div>
                    </div>
                    <p>Email</p>
                    <input class="form-control form-control-lg" type="email" id="input-email" name="email"
                        value="{{auth()->user()->email}} " disabled>
                    <div class=" {{ $errors->has('usuario') ? ' has-error' : '' }}">
                        <p>Usuário</p>
                        <input class="form-control form-control-lg" type="text" id="usuario" name="usuario" value="">
                        <small class="text-danger">{{ $errors->first('usuario') }}</small>
                    </div>
                    <div class=" {{ $errors->has('cpf') ? ' has-error' : '' }}">
                        <p>CPF</p>
                        <input class="form-control form-control-lg" type="text" id="cpf" name="cpf" value="">
                        <small class="text-danger">{{ $errors->first('cpf') }}</small>
                    </div>
                    <div class=" {{ $errors->has('telefone') ? ' has-error' : '' }}">
                        <p>Telefone</p>
                        <input class="form-control form-control-lg" type="text" id="tefelfone" name="telefone" value="">
                        <small class="text-danger">{{ $errors->first('telefone') }}</small>
                    </div>
                    <div class="user">
                        <input type="text" value="{{(auth()->user()->id)}}" name="user">
                    </div>
                    <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-block" id="button-form"><a href="#menu1"></a>Concluir</button>
                            </div>
                        </div>
                    </div>
            </div>
        </form>
    </div>

@endsection