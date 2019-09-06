@extends('layouts.master')

@section('content')
	
	<!-- Form contact start -->
    <div class="container-fluid text-center mt-5 py-5">
		<p class="py-1">Seja bem vindo a Psiconet</p>
		<h2 class="py-4">Vamos Começar</h2>
    </div>
        <form action="" class="container">
			<div class="row">
				<div class="form-group w-100  d-flex flex-wrap">
					<div class="col-lg-6 col-md-6 col-sm-12 py-2">
						<input class="form-control form-control-lg" type="text"  id="input-nome" name="nome" placeholder="Nome completo"> 
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 py-2">
						<input class="form-control form-control-lg" type="text"  id="input-ident" name="nome-usuario" placeholder="Nome de usuário"> 
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
                    <input class="form-control form-control-lg" type="password"  id="input-password" placeholder="Digite sua senha">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 py-2">
					<input class="form-control form-control-lg" type="password" class="form-control" id="confi-password" placeholder="Confirme sua senha">
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
		<!-- Modal start longin -->
	<div class="modal fade" id="sitModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<div class="modal-title w-100 d-flex align-items-center justify-content-center">
						<img src="assets/img/logo.png" alt="">
						<h2>PSICONET</h2>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
	
					<div class="login-container d-flex align-items-start justify-content-center">
						<form class="login-form text-center">
							<h2 class="title-login mb-4  font-weight-light ">Login</h2>
							<div class="form-check form-check-inline mb-4">
								<input class="form-check-input" type="radio" name="radioLogin" id="radioLoginCliente" value="loginCliente" checked>
								<label class="form-check-label" for="radioLogin1">
									Cliente
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioLogin" id="radioLoginPsicologo" value="loginPsicologo">
								<label class="form-check-label" for="radioLogin2">
									Psicólogo(a)
								</label>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" placeholder="Username ou E-mail">

							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-lg" placeholder="Senha">
							</div>
							<div class="forgot-link d-flex align-items-center justify-content-center">
								<a class="alert-link" href="#">Esqueci minha Senha ?</a>
							</div>
							
							<button class="button-form btn btn-primary btn-block btn-lg mt-4" id="">Login</button>
							<div class="resgister d-flex align-items-center justify-content-around mt-4">
							<p class="font-weight-normal">Não tem conta!</p>
							<p><a class="alert-link" href="cadastro.html">Registre-se agora</a></p>
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

	<!-- Modal longin  end-->

@endsection