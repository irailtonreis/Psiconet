@extends('layouts.master')

@section('content')

<section class="team-area ptb-90" id="team">
    {{-- <div class="container mt-4">
        <form>
            <h3>Dados Pessoais</h3>
            <div class="row">
                <div class="form-group w-100 d-flex flex-wrap">
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                     <img src="{{url($psicologo->foto)}}" alt="Avatar" class="avatar">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group w-100 d-flex flex-wrap">
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                        <p>Nome</p>
                        <input class="form-control form-control-lg" type="text" id="input-nome" name="nome"
                            value="{{auth()->user()->name}}">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2 ">
                        <p>Usuário</p>
                        <input class="form-control form-control-lg" type="text"  id="input-ident" name="nome-usuario" value="{{$psicologo->nome}}">
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex flex-wrap w-100">
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                        <p>CPF</p>
                         <input class="form-control form-control-lg" type="text"  id="input-nome" name="cpf" value="{{$psicologo->cpf}}">
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                        <p>Telefone</p>
                         <input class="form-control form-control-lg" type="text"  id="telefone" name="telefone" value="{{$psicologo->telefone}}">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group d-flex flex-wrap w-100">
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                        <p>E-mail</p>
                         <input class="form-control form-control-lg" type="email"  id="input-email" name="email" value="{{$psicologo->email}}">
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                        <p>CRP</p>
                        <input class="form-control form-control-lg" type="text"  id="crp" name="crp" value="{{$psicologo->crp}}">
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex flex-wrap w-100">
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                        <p>Plano</p>
                         <input class="form-control form-control-lg" type="text"  id="input-plano" value="{{$psicologo->planos->plano}}">
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                        <p>Foto</p>
                        <input class="form-control form-control-lg" type="text" id="foto" value="Foto do cliente">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-block" id="button-form">Salvar</button>
                </div>
            </div>

        </form>

    </div> --}}

    <div class="container">
        <div class="cadastro text-center py-3">
            <h2>Seu cadastro</h2>
        </div>
        <form action="/cadastrarPsicologo" class="py-3">
            @csrf
            {{ method_field('POST') }}
            <ul class="nav nav-tabs">
                <li class="active  list-cadastro w-50" id="list1"><a data-toggle="tab" href="#home" class="py-1  px-3 d-block w-100 h-100">Dados Pessoais</a></li>
                <li class="list-cadastro w-50" id="list2"><a data-toggle="tab" href="#menu1" class="py-1 px-3 d-block w-100">Dados Profissionais</a></li>
            </ul>
            
            <div class="tab-content pt-3">
                <div id="home" class="tab-pane fade in active show">
                    <div class="row">
                        <div class="form-group w-100 d-flex flex-wrap align-items-center">
                            <div class="col-md-2 col-sm-12 py-2">
                                <img src="{{url('img/team4.jpg')}}" alt="Avatar" class="avatar">
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <p>Nome</p>
                                <input class="form-control form-control-lg" type="text" id="input-nome" name="nome"
                                    value="{{auth()->user()->name}}">
                            </div>
                        </div>
                    </div>
                    <p>Email</p>
                    <input class="form-control form-control-lg" type="email" id="input-email" name="email"
                        value="{{auth()->user()->email}} " disabled>
                    <p>CPF</p>
                    <input class="form-control form-control-lg" type="text" id="cpf" name="CPF" value="">
                    <p>Telefone</p>
                    <input class="form-control form-control-lg" type="text" id="tefelfone" name="telefone" value="">
                    <p>Cidade</p>
                    <input class="form-control form-control-lg" type="text" id="cidade" name="cidade" value="">
                    <p>Estado</p>
                    <input class="form-control form-control-lg" type="text" id="estado" name="estado" value="">
                    <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-block" id="button-form"><a href="#menu1"></a>Avançar</button>
                            </div>
                        </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p>Registro CRP</p>
                    <input class="form-control form-control-lg" type="text" id="CRP" name="CRP" value="">
                    <p>Valor Sessão</p>
                    <input class="form-control form-control-lg" type="text" id="valor_sessao" name="valor_sessao"
                        value="">
                    <div class="">
                        <p>Plano</p>
                        <select name="planos" class="form-control form-control-lg">
                            <option name="planos" value="{{ $errors->has('plano') ? ' has-error' : '' }}">Selecione um
                                Plano</option>
                            @foreach ($planos as $plano)
                            <option name="planos" value="{{ $plano->id }}">{{ $plano->plano }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('plano') }}</small>
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlTextarea1">Sobre</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                placeholder="Escreva uma breve descrição" rows="3"></textarea>
                        </div>
                    <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-block" id="button-form"><a href="#menu1"></a>Concluir</button>
                            </div>
                        </div>
                </div>
            </div>
        </form>

        <div class="container mt-4">

            <div class="my-4">
                <h3>Horários de Atendimento</h3>
            </div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Segunda-feira
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Terça-feira
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Quarta-feira
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Quinta-feira
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Sexta-feira
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Sábado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Domingo
                    </label>
                </div>
                <div class="row">
                    <div class="col-md-1 d-flex justify-content-start mt-4">
                        <button type="submit" class="btn btn-primary btn-block" id="button-form">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="my-4">
                <h3>Histórico de consultas</h3>
            </div>
            <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Data da consulta</th>
                            <th scope="col">Valor da consulta</th>
                            <th scope="col">Cliente atendido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>20/01/2019</td>
                            <td>R$ 60,00</td>
                            <td>Mayra Alves</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>15/02/2019</td>
                            <td>R$ 80,00</td>
                            <td>Carlos Augusto</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>15/02/2019</td>
                            <td>R$ 60,00</td>
                            <td>Flávia Oliveira</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</section><!-- team section end -->

@endsection
