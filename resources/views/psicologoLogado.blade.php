@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <section class="team-area ptb-90" id="team">
        @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif
        <div class="container main-secction">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                    <img src="https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg">
                </div>
                <div class="row user-left-part">
                    <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                        <div class="row ">
                            <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                            <img src="{{$psicologo->foto}}" class="rounded-circle">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                                @if(auth()->user()->type == 1)
                                <form id="editarCadastroPsicologo"
                                    action="/editarCadastroPsicologo/{{auth()->user()->id}}" method="GET">
                                    @csrf{{ method_field('GET') }}
                                    <button id="btn-contact" class="btn btn-success btn-block mt-3">Editar
                                        Perfil</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                        <div class="row profile-right-section-row">
                            <div class="col-md-12 profile-header">
                                <div class="row">
                                    <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                        <h5>{{$user->name}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                    <label>Email:{{$user->email}}</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>CPF:{{$psicologo->cpf}}</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Telefone: {{$psicologo->telefone}}</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p></p>
                                                    </div>
                                                </div>
                                               
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>CRP: {{$psicologo->crp}}</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Valor Sessão:{{$psicologo->valor_sessao}}</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p></p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contact">Contactarme</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te
                                quieres comunicar con el. Para esto debes de ingresar tu información personal.</p>
                        </div>
                        <div class="form-group">
                            <label for="txtFullname">Nombre completo</label>
                            <input type="text" id="txtFullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="txtEmail">Email</label>
                            <input type="text" id="txtEmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="txtPhone">Teléfono</label>
                            <input type="text" id="txtPhone" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" (click)="openModal()"
                            data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
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