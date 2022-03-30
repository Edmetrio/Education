<!doctype html>
<html class="no-js" lang="pt">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>First Education - O Sonho no Estrangeiro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/icon/section.png')}}" />

    <link rel="stylesheet" href="{{url('assets/css/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/et-line-icon.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">

    <script src="{{url('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    @livewireStyles
</head>

<body>

    <header class="top">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <p>PARA MAIS INFORMAÇÕES <a href="https://wa.me/+258869125903" style="color: white;">+258 86 912 5903</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                @guest
                                <li><a href="{{ url('entrar') }}">Entrar</a></li>
                                <!-- <li><a href="login.html">Cadastrar-se</a></li> -->
                                @endguest
                                @auth
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ url('inscricaos')}}">Inscricao</a>
                                        <a class="dropdown-item" href="{{ url('cursos')}}">Curso</a>
                                        <a class="dropdown-item" href="{{ url('actividades') }}">Actividades</a>
                                        <a href="{{ url('resumo') }}">Lista</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                Sair
                                            </x-responsive-nav-link>
                                        </form>
                                        </a>
                                    </divb>
                                </li>

                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area two header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{asset('img/logo/Logo.png')}}" alt="FirstEducation" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-6">
                        <div class="content-wrapper text-right">
                            <!-- Main Menu Start -->
                            <div class="main-menu one text-right">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('/')}}">Inicio</a>
                                        </li>
                                        <li><a href="{{url('sobre')}}">Sobre Nós</a></li>
                                        <li><a href="{{url('servico')}}">Serviços</a>
                                            <ul>
                                                @foreach($sr as $s)
                                                <li><a href="{{ url('servico', $s->id)}}">{{ $s->nome }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <!-- <li class="hidden-sm"><a href="{{url("tradutor")}}">Tradutores</a>
                                        </li> -->
                                        <li><a href="{{url('aplicar')}}">Como Aplicar</a>

                                        </li>
                                        <li><a href="{{ url('contacto')}}">Contactos</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Search Form Start-->
                            <div class="search-btn">
                                <ul data-toggle="dropdown" class="header-search search-toggle">
                                    <li class="search-menu">
                                        <i class="fa fa-search"></i>
                                    </li>
                                </ul>
                                <div class="search">
                                    <div class="search-form">
                                        <form id="search-form" action="#">
                                            <input type="search" placeholder="Procurar.." name="search" />
                                            <button type="submit">
                                                <span><i class="fa fa-search"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End of Search Form-->
                            <!-- Main Menu End -->
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer class="footer-area">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-widget pr-60">
                            <div class="footer-logo pb-25">
                                <a href="{{ url('/')}}"><img src="{{asset('img/logo/Logo.png')}}" alt="FirstEducation"></a>
                            </div>
                            <p>O SEU SONHO DE ESTUDAR NO EXTERIOR AGORA ESTÁ AO SEU ALCANCE </p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/firsteducationmz"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://instagram.com/firsteducationmz"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://wa.me/+258869125903"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>Serviços</h3>
                            <ul>
                                @foreach($sr as $s)
                                <li><a href="{{ url('servico', $s->id)}}">{{ $s->nome }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>links Rápidos</h3>
                            <ul>
                                <li><a href="{{ url('servico') }}">Serviços</a></li>
                                <li><a href="{{ url('sobre') }}">Sobre Nós</a></li>
                                <!-- <li><a href="teacher.html">Tradutores</a></li> -->
                                <li><a href="{{ url('aplicar') }}">Como Aplicar</a></li>
                                <li><a href="{{ url('contacto') }}">Contactos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>Contactos</h3>
                            <p>Av. Salvador Allende, nº. 42<br>Maputo-Moçambique</p>
                            <p><a href="tel:+258 86 912 5903">+258 86 912 5903</a></p>
                            <p>info@firsteducation.edu.mz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Copyright © <a href="#" target="_blank"></a> First Education, All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <script src="{{ url('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{ url('assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{ url('assets/js/ajax-mail.js')}}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{ url('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ url('assets/js/plugins.js')}}"></script>
    <script src="{{ url('assets/js/main.js')}}"></script>

    @livewireScripts
</body>

</html>