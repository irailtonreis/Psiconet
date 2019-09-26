@extends('layouts.master')

@section('content')

    <div class="container mt-5 pt-5">
        
        <div class="cadastro text-center py-3 pt-5">
            <h2>Editar Cadastro</h2>
        </div>

        @if (empty($cliente))

        <form method=""  action="/concluirCadastroCliente" class="py-3">
            <div class="text-center py-3 pb-5 my-5">
                <h4 class="my-2">Para editar seu perfil é preciso finalizar o cadastro</h4>
                <p class="my-2">Clique no botão abaixo e finalize seu cadastro</p>
                <div class="col-md-12 d-flex justify-content-center my-2">
                    <button type="submit" class="btn btn-primary btn-block">Concluir cadastro</button>
                </div>
            </div>
        </form>

        @else

        <form method="POST"  action="/editarCadastroCliente/{{$cliente->id}}" class="py-3" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="tab-content pt-3">
                <div id="home">
                    <div class="row">
                        <div class="form-group w-100 d-flex flex-wrap align-items-center">
                            <div class="col-lg-12 pull-lg-12 text-center">
                                <img src="{{url($cliente->foto)}}" class="m-x-auto img-fluid rounded-circle" alt="avatar"  id="profile-img-tag" width="200px" />
                                <h6 class="m-t-2 py-3">Carregar foto de Perfil</h6>
                                <label class="custom-file w-50 py-2" {{ $errors->has('foto') ? ' has-error' : '' }} >
                                <input type="file" id="profile-img" name="foto" class="custom-file-input">
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
                        value="{{auth()->user()->email}} ">
                    <div class=" {{ $errors->has('usuario') ? ' has-error' : '' }}">
                        <p>Usuário</p>
                    <input class="form-control form-control-lg" type="text" id="usuario" name="usuario" value="{{$cliente->usuario}}">
                        <small class="text-danger">{{ $errors->first('usuario') }}</small>
                    </div>
                    <div class=" {{ $errors->has('cpf') ? ' has-error' : '' }}">
                        <p>CPF</p>
                        <input class="form-control form-control-lg" type="text" id="cpf" name="cpf" value="{{$cliente->cpf}}">
                        <small class="text-danger">{{ $errors->first('cpf') }}</small>
                    </div>
                    <div class=" {{ $errors->has('telefone') ? ' has-error' : '' }}">
                        <p>Telefone</p>
                        <input class="form-control form-control-lg" type="text" id="telefone" name="telefone" value="{{$cliente->telefone}}">
                        <small class="text-danger">{{ $errors->first('telefone') }}</small>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary ml-3" id="button-form">
                            <a href="#menu1"></a>Salvar</button>
                            <button type="submit" class="btn btn-primary ml-3" id="button-form-delete">
                            <a href="#menu1"></a>Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @endif
    </div>

@endsection