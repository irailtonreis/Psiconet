@extends('layouts.master')
@section('content')
<div class="container mt-5 py-5">
  
        <form method="POST"  action="/editarCadastroPsicologo/{{$psicologo->id}}" class="py-3" enctype="multipart/form-data">
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
                                <img src="{{url($psicologo->foto)}}" class="m-x-auto img-fluid rounded-circle" alt="avatar"  id="profile-img-tag" width="200px" />
                                <h6 class="m-t-2 py-3">Carregar foto de Perfil</h6>
                                <label class="custom-file w-50 py-2" {{ $errors->has('foto') ? ' has-error' : '' }}>
                                <input type="file" id="profile-img" name="foto" class="custom-file-input" value="{{url($psicologo->foto)}}">
                                  <span class="custom-file-control">Escolher arquivo</span>
                                  <div>
                                  </div>
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
                    <div class=" {{ $errors->has('email') ? ' has-error' : '' }}">
                        <p>CPF</p>
                    <input class="form-control form-control-lg" type="text" id="cpf" name="cpf" value="{{$psicologo->cpf}}">
                        <small class="text-danger">{{ $errors->first('cpf') }}</small>
                    </div>
                    <div class=" {{ $errors->has('telefone') ? ' has-error' : '' }}">
                    <p>Telefone</p>
                    <input class="form-control form-control-lg" type="text" id="tefelfone" name="telefone" value="{{$psicologo->telefone}}">
                    <small class="text-danger">{{ $errors->first('telefone') }}</small>
                    </div>
                    <div class=" {{ $errors->has('cidade') ? ' has-error' : '' }}">
                    <p>Cidade</p>
                    <input class="form-control form-control-lg" type="text" id="cidade" name="cidade" value="{{$psicologo->cidade}}">
                    <small class="text-danger">{{ $errors->first('cidade') }}</small>
                    </div>
                    {{-- <div class="">
                        <p>Estado</p>
                        <select name="planos" class="form-control form-control-lg">
                            <option name="estado" value="{{ $errors->has('estado') ? ' has-error' : '' }}">Estado</option>
                            @foreach ($estados as $estado)
                            <option name="estado" value="{{ $estado->id }}">{{ $estado->title }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('estado') }}</small>
                    </div>                 --}}
                    <div class=" {{ $errors->has('crp') ? ' has-error' : '' }}">
                    <p>Registro CRP</p>
                    <input class="form-control form-control-lg" type="text" id="CRP" name="crp" value="{{$psicologo->crp}}">
                    <small class="text-danger">{{ $errors->first('crp') }}</small>
                    </div>
                    <div class=" {{ $errors->has('valor_sessao') ? ' has-error' : '' }}">
                    <p>Valor Sessão</p>
                    <input class="form-control form-control-lg" type="text" id="valor_sessao" name="valor_sessao"
                        value="{{$psicologo->valor_sessao}}">
                        <small class="text-danger">{{ $errors->first('valor_sessao') }}</small>
                    </div>
                    <div class="">
                        <p>Plano</p>
                        <select name="plano" class="form-control form-control-lg {{ $errors->has('plano') ? ' has-error' : '' }}">
                        {{-- <option name="plano" value="">{{$plano->plano}}</option> --}}
                            @foreach ($planos as $plano)
                            <option name="plano" value="{{ $plano->id }}">{{ $plano->plano }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('plano') }}</small>
                    </div>
                    <div class="form-group {{ $errors->has('sobre') ? ' has-error' : '' }}">
                            <label for="exampleFormControlTextarea1">Sobre</label>
                            <textarea class="form-control" name="sobre" id="exampleFormControlTextarea1"
                    placeholder="Descrição Profissional" rows="3" autofocus>{{ ucfirst($psicologo->sobre) }}</textarea>
                            <small class="text-danger">{{ $errors->first('sobre') }}</small>
                        </div>
                        <div class="user">
                        <input type="text" value="{{(auth()->user()->id)}}" name="user">
                        </div>
                    <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-block" id="button-form"><a href="#menu1"></a>Salvar</button>
                            </div>
                        </div>
                    </div>
            </div>
        </form>

@endsection