@extends('layouts.master')

@section('content')
	
	<!-- Form contact start -->
    <div class="container-fluid text-center mt-5 py-5">
		<p class="py-3">Seja bem vindo a Psiconet</p>
		<h2 class="py-4">Vamos Começar</h2>
    </div>
		<form method="POST" action="/cadastroCliente" class="container">
			
			@csrf
            {{ method_field('POST') }}

			<div class="row">
				<div class="form-group w-100  d-flex flex-wrap">
					<div class="col-lg-6 col-md-6 col-sm-12 py-2">
						<input class="form-control form-control-lg" type="text"  id="input-nome" name="nome" placeholder="Nome completo"> 
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 py-2">
						<input class="form-control form-control-lg" type="text"  id="input-ident" name="usuario" placeholder="Nome de usuário"> 
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group d-flex flex-wrap w-100">
					<div class="col-lg-6 col-md-6 col-sm-12 py-2 ">
					<input class="form-control form-control-lg" type="number"  id="input-nome" name="cpf" placeholder="Seu CPF">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="number"  id="telefone" name="telefone" placeholder="Seu Telefone"> 
				</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group d-flex flex-wrap w-100">
					<div class="col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="email"  id="input-email" name="email" placeholder="Digite seu e-mail"> 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="email"  id="confi-email" name="conf-email" placeholder="Confirme seu e-mail"> 
				</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group d-flex flex-wrap w-100">
				<div class="col-lg-6 col-md-6 col-sm-12 py-2">
                    <input class="form-control form-control-lg" type="password"  id="input-password" name="password" placeholder="Digite sua senha">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="password" class="form-control" id="conf-password" name="conf-password" placeholder="Confirme sua senha">
				</div>
				</div>
			</div>
			<div class="form-check d-flex justify-content-center">
				<div>
					<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				</div>
				<label class="form-check-label" for="defaultCheck1">Concordo com os<span>Termos de Uso e Política de Privacidade.</span></label>
			</div>
			<div class="col-lg-12 py-2 d-flex justify-content-center">
				<button type="submit" class="btn btn-primary btn-block btn-lg mt-4 w-50" id="button-form">Começar Agora</button>
			</div>
        </form>
    </div>
	<!-- Form contact end-->

@endsection