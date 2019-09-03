<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Psiconet')</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}"> 
    <script defer src="https://kit.fontawesome.com/851f6f79f7.js"></script>
</head>
<body>
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
</body>
</html>