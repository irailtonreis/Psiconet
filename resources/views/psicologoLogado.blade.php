@extends('layouts.master')

@section('content')

<section class="team-area ptb-90" id="team">
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
