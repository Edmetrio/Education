<!doctype html>
<html class="no-js" lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>First Education - O Sonho no Estrangeiro</title>

    <meta name="description" content="A First Education é uma agência que tem como objectivo principal ajudar os estudantes a realizer o sonho de estudar no exterior" />
    <meta name="keywords" content="Inscrições Universitárias,Bolsas de estudos,Cursos online,Ano de fundação" />
    <meta name="author" content="Samuel Sibia e Edimetrio Cossa" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/icon/section.png')}}" />


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/et-line-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    @livewireStyles
</head>

<body>
    <header class="top">
        <div class="header-area header-sticky fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('img/logo/Logo.png')}}" alt="logo" class="img-fluid" ></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="content-wrapper one">
                            <div class="main-menu one text-right">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('/')}}">Início</a>
                                        </li>
                                        <li><a href="{{ url('sobre')}}">Sobre Nós</a></li>
                                        <li><a href="{{ url('servico')}}">Serviços</a>
                                            <ul>
                                                @foreach($sr as $s)
                                                <li><a href="{{ url('servico', $s->id)}}">{{ $s->nome }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <!--                                         <li class="hidden-sm"><a href="{{url("tradutor")}}">Tradutores</a>
                                        </li> -->
                                        <li><a href="{{ url('aplicar')}}">Como Aplicar</a>

                                        </li>
                                        <li><a href="{{ url('contacto')}}">Contactos</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu hidden-lg hidden-md one"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="slider-container" class="slider-area">
        <div class="slider-owl owl-theme owl-carousel">

            @foreach($slider as $s)
            <!-- <img class="img-fluid" src="{{asset('storage')}}/{{$s->icon}}" style="position: absolute; left: 0; top: 0; background: rgba(0, 0, 0, 0.32); width: 100%; height: 100%; content: '';" /> -->
            <div class="single-slide item" style="background-image: url({{asset('storage')}}/{{$s->icon}})">
                <div class="slider-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-md-offset-left-5">
                                <div class="slide-content-wrapper">
                                    <div class="slide-content">

                                        <h2> {{ $s->nome }} </h2>
                                        <p> {{ $s->descricao }} </p>
                                        @if(is_null($s->texto1))
                                        <a class="default-btn" href="{{ url($s->link)}}">Saiba mais</a>
                                        @else
                                        <a class="default-btn" href="{{ url('sliders', $s->id)}}">Saiba mais</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{ $slot }}

    <footer class="footer-area">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-widget pr-60">
                            <div class="footer-logo pb-25">
                                <a href="{{ url('/')}}"><img src="{{asset('img/logo/Logo.png')}}" width="150" height="160" alt="FirstEducation"></a>
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
                                <li><a href="{{url('servico')}}">Serviços</a></li>
                                <li><a href="{{url('sobre')}}">Sobre Nós</a></li>
                                <!-- <li><a href="{{url("tradutor")}}">Tradutores</a></li> -->
                                <li><a href="{{url('aplicar')}}">Como Aplicar</a></li>
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

    <script src="{{ url('assets/js/jquery-3.5.1.min.js')}}"></script>

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