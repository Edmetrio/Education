<!doctype html>
<html class="no-js" lang="pt">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>First Education - O Sonho no Estrangeiro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
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
                            <p>PARA MAIS INFORMAÇÕES +258 86 912 5903</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <li><a href="login.html">Entrar</a></li>
                                <li><a href="signup.html">Cadastre-Se</a></li>
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
                            <a href="index.html"><img src="img/logo/logo2.png" alt="eduhome" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-6">
                        <div class="content-wrapper text-right">
                            <!-- Main Menu Start -->
                            <div class="main-menu one text-right">
                                <nav>
                                    <ul>
                                        <li><a href="{{url("/")}}">Inicio</a>
                                        </li>
                                        <li><a href="{{url("about")}}">Sobre Nós</a></li>
                                        <li><a href="{{url("curso")}}">Serviços</a>
                                            <ul>
                                                <li><a href="{{ route('inscricao.index')}}">Inscrições universitárias</a></li>
                                                <li><a href="{{ route('bolsa.index')}}">Bolsas de Estudo</a></li>
                                                <li><a href="{{ route('curso.index')}}">Cursos Online</a></li>
                                                <li><a href="{{ route('ano.index')}}">Ano de Fundação</a></li>
                                                <li><a href="{{ route('cotacao.index')}}">Cotação</a></li>
                                                <li><a href="{{ route('traducao.index')}}">Tradução</a></li>
                                            </ul>
                                        </li>
                                        <li class="hidden-sm"><a href="{{url("tradutor")}}">Tradutores</a>
                                        </li>
                                        <li><a href="{{url("aplicar")}}">Como Aplicar</a>

                                        </li>
                                        <li><a href="contact.html">Contactos</a></li>
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

    <footer class="footer-area">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-widget pr-60">
                            <div class="footer-logo pb-25">
                                <a href="index.html"><img src="img/logo/footer-logo.png" alt="eduhome"></a>
                            </div>
                            <p>O SEU SONHO DE ESTUDAR NO EXTERIOR AGORA ESTÁ AO SEU ALCANCE </p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/firsteducationmz"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://instagram.com/firsteducationmz"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="https://wa.me/+258869125903"><i class="zmdi zmdi-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>Serviços</h3>
                            <ul>
                                <li><a href="{{ route('inscricao.index')}}">Inscrições universitárias</a></li>
                                <li><a href="{{ route('bolsa.index')}}">Bolsas de Estudo</a></li>
                                <li><a href="{{ route('curso.index')}}">Cursos Online</a></li>
                                <li><a href="{{ route('ano.index')}}">Ano de Fundação</a></li>
                                <li><a href="{{ route('cotacao.index')}}">Cotação</a></li>
                                <li><a href="{{ route('traducao.index')}}">Tradução</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>links Rápidos</h3>
                            <ul>
                                <li><a href="course.html">Serviços</a></li>
                                <li><a href="about.html">Sobre Nós</a></li>
                                <li><a href="teacher.html">Tradutores</a></li>
                                <li><a href="aplicar.html">Como Aplicar</a></li>
                                <li><a href="event.html">Contactos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-widget">
                            <h3>Contactos</h3>
                            <p>Av. Amilcar Cabral<br>Maputo-Moçambique</p>
                            <p>+258 86 86 912 5903</p>
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