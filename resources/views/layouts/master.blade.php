<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Psiconet')</title>
    <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('css/app.css')}}"> 
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/icofont.css')}}"/>
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
</head>
<body data-spy="scroll" data-target=".header" data-offset="50">

       

         <header class="header"> 
                <div class="container">
                    <div class="row flexbox-center">
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="logo">
                                <img src="{{url('img/logo.png')}}" alt="">
                                <a href="/index"><span>Psiconet</a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-6">
                            <div class="responsive-menu"></div>
                            <div class="mainmenu">
                                <ul id="primary-menu">
                                    <li><a class="nav-link" href="#">Como Funciona</a></li>
                                    <li><a class="nav-link" href="#">Para Você</a></li>
                                    <li><a class="nav-link" href="#">Para Psicólogo</a></li>
                                    <li><a class="nav-link" href="#">Dúvidas</a></li>
                                    <li><a class="appao-btn" href="#" data-toggle="modal" data-target="#sitModal">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!-- header section end -->
            <main>
                @yield('content')
            </main> 
            

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
							<h2 class="title-login mb-4 font-weight-light ">Login</h2>
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
								<input type="text" class="form-control form-control-lg" placeholder="E-mail">

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
							<p><a class="alert-link" href="/cadastroCliente">Registre-se agora</a></p>
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
    
    <!-- footer section start -->
	<footer class="footer" id="contact">
		<div class="container">			
			<div class="row">
				<div class="col-lg-12 text-center">
					<p class="footer-links">
						<a href="#about">Como funciona</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#showcase-area">Por que usar</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#pricing">Planos</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#team">Nossos Pisicólogos</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="psicologo.php">Seja um Pisicólogos</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright-area">
						<ul>
							<li><a href="http://facebook.com" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
							<li><a href="http://instagram.com" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>
							<li><a href="http://linkedin.com" target="_blank"><i class="icofont icofont-brand-linkedin"></i></a></li>
						</ul>
						<p>Se você estiver em uma situação de perigo, não use este site e procure o atendimento
							presencial ou ligue para 188 - Centro de valorização da vida <a href="https://www.cvv.org.br/" target="_blank">(https://www.cvv.org.br/)</a></p>
						<p style="font-size: 12px;">&copy;Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> PSICONET Terapias | Todos os
							direitos reservados</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer section end -->
	
	<a href="#" class="scrollToTop">
		<i class="icofont icofont-arrow-up"></i>
    </a>
    

    <script  src="{{url('js/app.js')}}"></script>
    <script  src="{{url('js/app.js')}}"></script>
    <script  src="{{url('js/jquery.min.js')}}"></script> 
    <script  src="{{url('js/jquery.slicknav.min.js')}}"></script>
    <script  src="{{url('js/main.js')}}"></script> 
    <script  src="{{url('js/owl.carousel.min.js')}}"></script>
    <script  src="{{url('js/slick.min.js')}}"></script>
    <script  src="{{url('js/wow-1.3.0.min.js')}}"></script> 

</body>
</html>