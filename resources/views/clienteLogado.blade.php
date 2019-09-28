@extends('layouts.master')

@section('content')
	{{-- @dd($psicologos); --}}
	@if ($psicologos->isEmpty())
	<section class="row">
		<header class="col-12">
			<h1 class="col-12 text-center">Não temos Psicólogos disponíveis na plataforma</h1>
		</header>
	</section>
	@else
	<section class="team-area ptb-90" id="team">
		<div class="container mt-4">
			<div class="row">
				<div class="col-lg-12">
					<div class="sec-title">
						<h2>Nossos Psicólogos Disponíveis<span class="sec-title-border"><span></span><span></span><span></span></span>
						</h2>
						<p>Escolha um Profissional e clique em começar</p>
					</div>
				</div>
			</div>
			<div class="row my-4">
				<h2>Psicólogos Díponíveis para plano Semanal</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="single-team-member">
						<div class="team-member-img">
							@foreach($psicologos as $psicologo)
						<img src="{{url($psicologo->foto)}}" alt="team">
							<div class="team-member-icon">
								<div class="display-table">
									<div class="display-tablecell">
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
										<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="team-member-info">
							<a href="#">
							<h4>{{$psicologo->users->name}}</h4>
							</a>
							<p>Especialista há 15 anos em Psicologia da Saúde</p>
						</div>
						<a class="appao-btn my-2" href="#">Iniciar</a>
					</div>
				</div>
				@endforeach				

		</div>
		@endif
	</section><!-- team section end -->
@endsection