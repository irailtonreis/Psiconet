@extends('layouts.master')

@section('content')
  {{-- @dd($psicologos) --}}
	@if ($psicologos->isEmpty())
	<section class="row pt-5">
		<header class="col-12 pt-5 mt-5">
			<h1 class="col-12 text-center">Não temos Psicólogos disponíveis na plataforma</h1>
		</header>
	</section>
	@else
	<section class="team-area ptb-90" id="team">
			<div class="success">
					@if(session('success'))
					<div class="alert alert-success text-center">
						{{ session('success') }}
					</div>
					@endif
				</div>
		<div class="container mt-4">
			<div class="row">
				<div class="col-lg-12">
					<div class="sec-title" style="max-width:800px;">
						<h2 class="col-lg-12">Nossos Psicólogos Disponíveis<span class="sec-title-border"><span></span><span></span><span></span></span>
						</h2>
						<p>Escolha um Profissional e clique em começar</p>
					</div>
				</div>
			</div>
			<div class="row">
			@foreach($psicologos as $psicologo)
				<div class="col-lg-3 col-sm-6 py-3">
					<div class="single-team-member">
						<div class="team-member-img">
						<img src="{{url($psicologo->foto)}}" class="w-100" alt="team">
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
						<div class="team-member-info d-flex flex-column flex-1">
							<a href="/perfilPsicologo/{{$psicologo->id}}">
							<h4>Nome</h4>
							</a>
						<p>{{$psicologo->descricao}}</p>
						</div>
						<a class="btn appao-btn my-2" href="/psicologo/{{$psicologo->id}}">Visualizar</a>
					</div>
				</div>
				@endforeach				
		</div>
		</div>
		@endif
	</section><!-- team section end -->
@endsection