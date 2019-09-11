@extends('layouts.master')

@section('content')
	<!-- Form contact start -->
    <div class="container-fluid text-center mt-5 pt-5">
		<p class="py-4">Seja bem vindo a Psiconet</p>
		<h2 class="py-1 pb-2">Vamos Começar</h2>
	</div>
	<div class="container">
	

		<form method="POST"  action="/cadastroPsicologo"  enctype="multipart/form-data">

			@csrf
			{{ method_field('POST') }}
			<div class="row">
				<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}  w-100  d-flex flex-wrap">
					<div class="col-lg-6 col-md-6 col-sm-12 py-2">
						<input class="form-control form-control-lg" type="text"  id="input-nome" name="nome" placeholder="Nome completo">
						<small class="text-danger">{{ $errors->first('nome') }}</small>
					</div>
					<div class=" {{ $errors->has('telefone') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12 py-2">
							<input class="form-control form-control-lg" type="text"  id="telefone" name="telefone" placeholder="Telefone">
							<small class="text-danger">{{ $errors->first('telefone') }}</small> 
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group {{ $errors->has('cpf') ? ' has-error' : '' }}  d-flex flex-wrap w-100">
					<div class="col-lg-6 col-md-6 col-sm-12 py-2 ">
						<input class="form-control form-control-lg" type="text"  id="input-nome" name="cpf" placeholder="CPF">
						<small class="text-danger">{{ $errors->first('cpf') }}</small>
					</div>
					<div class="form-group {{ $errors->has('crp') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12 py-2">
							<input class="form-control cpf-mask" type="text"  id="input-crp" name="crp" placeholder="CRP">
							<small class="text-danger">{{ $errors->first('crp') }}</small>
					</div>
			</div>
			</div>
			<div class="row">
				<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} d-flex flex-wrap w-100">
					<div class="col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="email"  id="input-email" name="email" placeholder="Digite seu e-mail"> 
					<small class="text-danger">{{ $errors->first('email') }}</small>
				</div>
				<div class="form-group {{ $errors->has('conf-email') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="email"  id="confi-email" name="conf-email" placeholder="Confirme seu e-mail"> 
					<small class="text-danger">{{ $errors->first('conf-email') }}</small>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="file"  id="inpu-foto" name="foto" placeholder=""> 
					<small class="text-danger">{{ $errors->first('foto') }}</small>
				</div>
				<div class="form-group  col-lg-6 col-md-6 col-sm-12 py-2">
						<select name="planos" class="form-control">
							<option name="planos" value="{{ $errors->has('plano') ? ' has-error' : '' }}">Selecione um Plano</option>
							@foreach ($planos as $plano)
								<option name="planos" value="{{ $plano->id }}">{{ $plano->plano }}</option>
							@endforeach
						</select>
						<small class="text-danger">{{ $errors->first('plano') }}</small>
					</div>

				
				
			</div>
			
			<div class="row">
				<div class="form-group {{ $errors->has('senha') ? ' has-error' : '' }} d-flex flex-wrap w-100">
				<div class="col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="password" name="senha"  id="input-password" placeholder="Digite sua senha">
					<small class="text-danger">{{ $errors->first('senha') }}</small>
				</div>
				<div class=" {{$errors->has('conf-senha') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12 pt-2">
					<input class="form-control form-control-lg" type="password" name="conf-senha" class="form-control" id="confi-password" placeholder="Confirme sua senha">
					<small class="text-danger">{{ $errors->first('conf-senha') }}</small>
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
    </div>
	<!-- Form contact end-->
@endsection