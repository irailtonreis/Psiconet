@extends('layouts.master')

@section('content')
           
    <section class="team-area ptb-90" id="team">
        <div class="container mt-4">
                <form>  
                    <h3>Dados Pessoais</h3> 
                    <div class="row">
                    <div class="form-group w-100 d-flex flex-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                                {{-- <img src="{{url($psicologo->foto)}}" alt="Avatar" class="avatar"> --}}
                            </div>
                        </div>
                    </div>             
                    <div class="row">
                        <div class="form-group w-100 d-flex flex-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                                <p>Nome</p>
                            {{-- <input class="form-control form-control-lg" type="text"  id="input-nome" name="nome" value="{{$psicologo->nome}}"> --}}
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 py-2 ">
                                <p>Usuário</p>
                                {{-- <input class="form-control form-control-lg" type="text"  id="input-ident" name="nome-usuario" value="{{$psicologo->nome}}">  --}}
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="form-group d-flex flex-wrap w-100">
                            <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                                <p>CPF</p>
                            {{-- <input class="form-control form-control-lg" type="text"  id="input-nome" name="cpf" value="{{$psicologo->cpf}}"> --}}
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                            <p>Telefone</p>
                            {{-- <input class="form-control form-control-lg" type="text"  id="telefone" name="telefone" value="{{$psicologo->telefone}}">  --}}
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group d-flex flex-wrap w-100">
                            <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                                <p>E-mail</p>
                            {{-- <input class="form-control form-control-lg" type="email"  id="input-email" name="email" value="{{$psicologo->email}}">  --}}
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                            <p>CRP</p>
                            {{-- <input class="form-control form-control-lg" type="text"  id="crp" name="crp" value="{{$psicologo->crp}}">  --}}
                        </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="form-group d-flex flex-wrap w-100">
                        <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                            <p>Plano</p>
                            {{-- <input class="form-control form-control-lg" type="text"  id="input-plano" value="{{$psicologo->planos->plano}}"> --}}
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
            
        </div>

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