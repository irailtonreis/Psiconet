@extends('layouts.master')
@section('content')
<section class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-10">
					<div class="hero-area-content">
						<h1>Terapia Online e uma nova maneira cuidar da sua saúde e inteligência emocional</h1>
						<p>A Psiconet está aqui para conectar Psicólogos a milhares de pessoas que desejam melhorar o
							seu bem-estar.</p>
						<a href="login" class="appao-btn">Consulta online</a>
						<a href="paraPsicologo" class="appao-btn">Seja um Psicólogo</a>

					</div>
				</div>
			</div>
		</div>
	</section><!-- hero area end -->
	<section class="about-area ptb-90" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="sec-title">
						<h2>Sobre a Psiconet<span
								class="sec-title-border"><span></span><span></span><span></span></span></h2>	
					</div>
				</div>
			</div>
			<div class="row px-3">
					<div class="col-lg-4 text-justify punchline">
						<div class="single-about-box py-4 my-2">
								<p>Psiconet é formada por um grupo de pessoas apaixonadas por pessoas. Acreditamos que podemos facilitar o acesso a melhores condições de saúde e bem-estar através de soluções tecnológicas e inovadoras por meio da internet.</p>
						</div>
					</div>
					<div class="col-lg-4 text-justify punchline">
						<div class="single-about-box py-4 my-2">
								<p>Nosso trabalho é proporcionar a todos um serviço de alta qualidade, eficiente e seguro. Oferecer facilidade e comodidade para os clientes que precisam de um bom serviço e para os psicólogos que desejam aumentar sua renda através da internet. prestando um bom serviço.</p>
						</div>
					</div>
					<div class="col-lg-4 text-justify">
						<div class="single-about-box py-4 my-2 punchline">
								<p>Todos os nossos psicólogos online são licenciados e passam por um processo seguro de verificação e credenciamento, além de aderirem a rigorosos códigos de ética e sigilo. Os profissionais da Psiconet são capacitados a ajudá-lo a fazer mudanças positivas em sua vida.</p>
						</div>
					</div>
				</div>
		</div>
	</section><!-- about section end -->
	<section class="porque-usar">
		<div class="container text-center">
			<div class="row">
					<div class="col-lg-12 pt-5">
						<div class="sec-title">
							<h2 class="text-white">Por que usar a Psiconet<span
									class="sec-title-border"><span></span><span></span><span></span></span></h2>
							<p class="text-white">A melhor terapia online ao seu alcance acessível em qualquer lugar</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="d-flex flex-wrap justify-content-around mx-5 px-2">
						<div class="col-lg-5  card mb-4">
								<div class="card-header text-center"><h4>Acessibilidade</h4></div>
								<div class="card-body">
									<p class="card-text">Terapia online é bastante acessível e conveniente. Uma vez que você tem a possibilidade de
										conversar com seu psicólogo do conforto da sua própria casa. Agendar suas sessões de terapia
										para os horários mais convenientes para você.</p>
								</div>
								</div>
								<div class="col-lg-5   card mb-4">
								<div class="card-header text-center"><h4>Psicólogo Ideal</h4></div>
								<div class="card-body">
									<p class="card-text">Você tem acesso a profissionais qualificados independente da distância. Encontre o Psicólogo
										mais adequado para sua necessidade.Faça a pesquisa e escolha o que mais se encaixa para seu
										perfil.</p>
								</div>
								</div>
								<div class="col-lg-5  card mb-4">
								<div class="card-header text-center"><h4>Preço acessível</h4></div>
								<div class="card-body">
									<p class="card-text">Você não precisa pagar caro para se cuidar. Fale com um psicólogo on-line, sem pesar no
										bolso. Disponibilizamos planos acessíveis para atender suas necessidades.</p>
								</div>
								</div>
								<div class="col-lg-5  card mb-4">
								<div class="card-header text-center"><h4>Horário Flexivel</h4></div>
								<div class="card-body">
									<p class="card-text">Quem tem uma agenda cheia sabe como pode ser difícil marcar uma consulta. Porém, por ser
										online, fica muito mais fácil para o psicólogo conseguir te atender em horários como, por
										exemplo, de manhã bem cedo ou até tarde da noite.</p>
								</div>
								</div>

					</div>
				
			</div>
		</div>

	</section>
	<section class="testemonials">
		<div class="container">

				<div class="row">
						<div class="col-lg-12 pt-5">
							<div class="sec-title">
								<h2>Depoimentos<span
										><span></span><span></span><span></span></span></h2>
								<p>Veja o que o nossos clientes estão falando sobre a Psiconet</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
							<div class="profile d-flex flex-column justify-content-between">
								<img src="{{url('/img/author1.jpg')}}" class="user" alt="">
								<blockquote> " Tive uma experiencia muito boa com o site, obtive a ajuda que precisava e achei as funcionalidades e comodidade site muito legal..." </blockquote>
								<h3>Larissa Andrade</h3>
							</div>
						</div>
						<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
								<div class="profile d-flex flex-column justify-content-between">
									<img src="{{url('/img/author2.jpg')}}" class="user" alt="">
									<blockquote>" Achei o site muito prático e consegui través da plataforma Psiconet trazer a praticidade de ser atendido a distância e não deixar de fazer minha terapia..." </blockquote>
									<h3>Marcos Passos</h3>
								</div>
							</div>
							<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
									<div class="profile d-flex flex-column justify-content-between">
										<img src="{{url('/img/author3.jpg')}}" class="user" alt="">
										<blockquote>" Era tudo que eu estava procurando, pois consigo associar minha vida corrida com as minhas terapias, posso ser atendida quando e onde quiser, me ajudou muito... obrigado Psiconet..." </blockquote>
										<h3>Beatriz Souza</h3>
									</div>
								</div>
								<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
										<div class="profile d-flex flex-column justify-content-between">
											<img src="{{url('/img/author4.jpg')}}" class="user" alt="">
											<blockquote>" Recomendo a plataforma pois possuem profissionais muito bons e com alta qualificação, acredito que pra quem não tem muito tempo é a plataforma ideal..." </blockquote>
											<h3>Cláudio Moreira</h3>
										</div>
									</div>

					</div>
		</div>
	</section>
	


	
	{{-- <div class="container">
			<div class="row">
					<div class="col-lg-12">
						<div class="sec-title mt-5 mb-5 py-3">
							<h2>O que dizem sobre a Psiconet<span class="sec-title-border"><span></span><span></span><span></span></span>
							</h2>
							<p>Opinião de alguns pacientes, sobre que acham dos serviços da Psiconet e nossos psicólogos.</p>
						</div>
					</div>
				</div>
		<div class="crousel-container">
			<div id="carousel">
					<div class="hideLeft mt-5">
						<div class="testimonial">
							<img src="{{url('img/author1.jpg')}}">
						</div>
					 
				   </div>
			 
				   <div class="prevLeftSecond">
						<div class="testimonial">
								<img src="{{url('img/author2.jpg')}}">
							</div>
				   </div>
			 
				   <div class="prev">
						<div class="testimonial">
								<img src="{{url('img/author3.jpg')}}">
							</div>
				   </div>
			 
				   <div class="selected">
						<div class="testimonial">
								<img src="{{url('img/author4.jpg')}}">
							</div>
				   </div>
			 
				   <div class="next">
						<div class="testimonial">
								<img src="{{url('img/author5.jpg')}}">
							</div>
				   </div>
			 
				   <div class="nextRightSecond">
						<div class="testimonial">
								<img src="{{url('img/author6.jpg')}}">
							</div>
				   </div>
			 
				   <div class="hideRight">
						<div class="testimonial">
								<img src="{{url('img/author7.jpg')}}">
							</div>
				   </div>
				 </div>
			 
				 <div class="buttons text-center">
				   <button id="prev">Prev</button>
				   <button id="next">Next</button>
				 </div>
				</div>
	</div>  --}}

	{{-- <div class="container custom-duvidas" id="duvidas">
		<div class="text-center py-5">
		<h2>Perguntas Frequentes</h2>
		<h4>Veja porque o Psiconet é a melhor opção para você</h4>
		</div>
    <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas" role="button" aria-expanded="false" aria-controls="collapseDuvidas">
        O que é a Psiconet?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas" aria-expanded="false" aria-controls="collapseDuvidas">
		</div>
	
        <div class="collapse" id="collapseDuvidas">
			<div class="px-3 text-left">
				<p>
				A Psiconet foi criada para conectar você a psicólogos licenciados e experientes através de sessões de vídeo de forma simples, confidencial e muito mais acessível.
				</p>
			</div>
        </div>
    </div>

	<div class="row px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas1" role="button" aria-expanded="false" aria-controls="collapseDuvidas1">
        Como a Psiconet pode melhorar minha vida?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas1" aria-expanded="false" aria-controls="collapseDuvidas1">
		</div>
	
        <div class="collapse" id="collapseDuvidas1">
			<div class="px-3 text-left">
				<p>
				Temos mais de 1.500 psicólogos licenciados para ajudar você. A grande maioria desses profissionais é experiente em diversas áreas. Já ajudamos pessoas pelos seguintes motivos: 
				</p>
				<p>Descontrole emocional</p>
				<p>Distúrbio alimentar - Extrema magreza</p>
				<p>Doença psicológica</p>
				<p>Fibromialgia</p>
				<p>Pensamento obsessivo</p>
				<p>Estresse pós-traumático </p>
				<p>Problemas de relacionamento </p>
				<p>Problemas no trabalho</p>
			</div>
        </div>
    </div>

	   <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas2" role="button" aria-expanded="false" aria-controls="collapseDuvidas2">
        A terapia online realmente funciona?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas2" aria-expanded="false" aria-controls="collapseDuvidas2">
		</div>
	
        <div class="collapse" id="collapseDuvidas2">
			<div class="px-3 text-left">
				<p>
				Segundo diversos estudos realizados na última década, a terapia online tem eficácia comprovada, assim como a presencial. Além disso, para assegurar a efetividade do tratamento, a Psiconet seleciona cuidadosamente seus terapeutas, sendo todos licenciados e credenciados pelo Conselho de Psicologia. 
				</p>
			</div>
        </div>
    </div>

	   <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas3" role="button" aria-expanded="false" aria-controls="collapseDuvidas3">
        Terapia online é confiável?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas3" aria-expanded="false" aria-controls="collapseDuvidas3">
		</div>
	
        <div class="collapse" id="collapseDuvidas3">
			<div class="px-3 text-left">
				<p>
				Sim, segundo diversos estudos realizados na última década, a terapia online tem eficácia comprovada, assim como a presencial.
				</p>
			</div>
        </div>
    </div>

		   <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas4" role="button" aria-expanded="false" aria-controls="collapseDuvidas4">
        Como Funciona?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas4" aria-expanded="false" aria-controls="collapseDuvidas4">
		</div>
	
        <div class="collapse" id="collapseDuvidas4">
			<div class="px-3 text-left">
				<p>
				Em seu primeiro contato, você selecionará o psicólogo com quem mais se identificar. Depois, o profissional selecionado responderá algumas perguntas sobre os motivos que fizeram você a buscar ajuda. Por fim, você será direcionado para selecionar o plano de assinatura que preferir.
				</p>
			</div>
        </div>
    </div>

	   <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas5" role="button" aria-expanded="false" aria-controls="collapseDuvidas5">
        Os psicólogos que atendem na Psiconet são licenciados?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas5" aria-expanded="false" aria-controls="collapseDuvidas5">
		</div>
	
        <div class="collapse" id="collapseDuvidas5">
			<div class="px-3 text-left">
				<p>
				Com certeza! Na Psiconet selecionamos criteriosamente os psicólogos que se cadastram para atender conosco. Durante o processo de seleção levamos em consideração o tempo de experiência, os cursos, a faculdade e pós graduação, experiência clínica entre outros detalhes técnicos.
				Todos os psicólogos que atuam a Psiconet já ajudaram milhares de pessoas em nossa plataforma e poderão ajudar você também. 
				</p>
			</div>
        </div>
    </div>

	  <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas6" role="button" aria-expanded="false" aria-controls="collapseDuvidas6">
        Eu sempre ficarei em contato com o mesmo psicólogo?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas6" aria-expanded="false" aria-controls="collapseDuvidas6">
		</div>
	
        <div class="collapse" id="collapseDuvidas6">
			<div class="px-3 text-left">
				<p>
				Sim, você sempre permanecerá com o mesmo psicólogo selecionado. Caso não se adapte ao psicólogo, você também pode solicitar a troca diretamente pelo “Suporte” no nosso site. 
				</p>
			</div>
        </div>
    </div>

	  <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas7" role="button" aria-expanded="false" aria-controls="collapseDuvidas7">
        Posso trocar de psicólogo?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas7" aria-expanded="false" aria-controls="collapseDuvidas7">
		</div>
	
        <div class="collapse" id="collapseDuvidas7">
			<div class="px-3 text-left">
				<p>
				Sim. Caso não tenha se adaptado com o seu psicólogo, você pode solicitar outro profissional no “Suporte” dentro do nosso site. 
				</p>
			</div>
        </div>
    </div>

	  <div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas8" role="button" aria-expanded="false" aria-controls="collapseDuvidas8">
        Tenho privacidade nas minhas conversas?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas8" aria-expanded="false" aria-controls="collapseDuvidas8">
		</div>
	
        <div class="collapse" id="collapseDuvidas8">
			<div class="px-3 text-left">
				<p>
				Sim sua segurança e privacidade é incontestável. Por isso, nossa plataforma é 100% criptografada, a fim de garantir que apenas você e seu terapeuta tenham acesso ao conteúdo das sessões.
				Além disso, a terapia online segue o Código de Ética da Psicologia, que exige confidencialidade e sigilo nas informações reveladas pelo paciente. 
				</p>
			</div>
        </div>
    </div>

	<div class="row py-3 px-3">
        <a class="alert-link" data-toggle="collapse" href="#collapseDuvidas9" role="button" aria-expanded="false" aria-controls="collapseDuvidas9">
        Tenho menos de 18 anos, posso usar a Psiconet?
        </a>
		<div data-toggle="collapse" data-target="#collapseDuvidas9" aria-expanded="false" aria-controls="collapseDuvidas9">
		</div>
	
        <div class="collapse" id="collapseDuvidas9">
			<div class="px-3 mt-4 text-left">
				<p>
				Infelizmente não. Apenas maiores de 18 anos podem utilizar os serviços da Psiconet.
				</p>
			</div>
        </div>		
	</div> --}}
	
	<!-- Section Psicólogos inicio-->
	<!-- team section start -->
	<section class="team-area ptb-90" id="team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="sec-title">
						<h2>Conheça o Nosso Time!<span class="sec-title-border"><span></span><span></span><span></span></span>
						</h2>
						<p>Trabalhamos com profissionais de know-how no mercado para poder oferecer a melhor experiência para os nossos clientes!
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="single-team-member">
						<div class="team-member-img">
						<img src="img/team1.jpg" alt="team">
							<div class="team-member-icon">
								<div class="display-table">
									<div class="display-tablecell">
										<a href="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
										<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
										<a href="http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
										<a href="https://br.pinterest.com/"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="team-member-info">
							<a href="#">
								<h4>Maria Joaquina</h4>
							</a>
							<p>Especialista há 15 anos em Psicologia da Saúde</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="single-team-member">
						<div class="team-member-img">
						<img src="{{url('img/team2.jpg')}}" alt="team">
							<div class="team-member-icon">
								<div class="display-table">
									<div class="display-tablecell">
										<a href="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
										<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
										<a href="#http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
										<a href="https://br.pinterest.com/"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="team-member-info">
							<a href="#">
								<h4>Jaime Palilo</h4>
							</a>
							<p>Especialista conceituado em Psicologia Cognitiva</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="single-team-member">
						<div class="team-member-img">
							<img src="{{url('img/team3.jpeg')}}" alt="team">
							<div class="team-member-icon">
								<div class="display-table">
									<div class="display-tablecell">
										<a ref="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
										<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
										<a href="http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
										<a href="https://br.pinterest.com/"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="team-member-info">
							<a href="#">
								<h4>Marcelina Guerra</h4>
							</a>
							<p>Profissional conceituada em Psicologia de Desenvolvimento</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="single-team-member">
						<div class="team-member-img">
							<img src="img/team4.jpg" alt="team">
							<div class="team-member-icon">
								<div class="display-table">
									<div class="display-tablecell">
										<a href="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
										<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
										<a href="http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
										<a href="https://br.pinterest.com/"><i class="icofont icofont-social-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="team-member-info">
							<a href="#">
								<h4>Daniel Zapata</h4>
							</a>
							<p> Há 10 anos atuando no mercado de Psicologia Social</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- team section end -->
@endsection