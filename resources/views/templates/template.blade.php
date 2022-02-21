<!doctype html>
<html class="no-js" lang="pt">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>First Education - O Sonho no Estrangeiro</title>
        <meta name="description" content="A First Education é uma agência que tem como objectivo principal ajudar os estudantes a realizer o sonho de estudar no exterior" />
        <meta name="keywords" content="Inscrições Universitárias,Bolsas de estudos,Cursos online,Ano de fundação" />
        <meta name="author" content="Samuel Sibia e Edimetrio Cossa"/>
        <meta name="viewport" content= "width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/favicon.ico')}}">    

        <link rel="stylesheet" href="{{asset ('assets/css/bootstrap.min.css')}}">
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

        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    </head>
    <body>
		<header class="top">
			<div class="header-area header-sticky fixed">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="logo">
								<a href="{{asset('/')}}"><img src="img/logo/logo.png" alt="logo" class="img-fluid" style=" width: 70px;
                                    height: 40px;"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="content-wrapper one">
                                
                                <div class="main-menu one text-right">
                                    <nav>
                                        <ul>
                                            <li><a href="{{asset('/')}}">Inicio</a>
                                            </li>
                                            <li><a href="about.html">Sobre Nós</a></li>
                                            <li><a href="course.html">Serviços</a>
                                                <ul>
                                                    <li><a href="infoInscricao.html">Inscrições universitárias</a></li>
                                                    <li><a href="infoBolsa.html">Bolsas de Estudos</a></li>
                                                    <li><a href="infoOnline.html">Cursos Online</a></li>
                                                    <li><a href="infoFundacao.html">Ano Fundação</a></li>
                                                    <li><a href="#">Cv</a></li>
                                                </ul>
                                            </li>
                                            <li class="hidden-sm"><a href="teacher.html">Tradutores</a>
                                            </li>
                                            <li><a href="aplicar.html">Como Aplicar</a>
                                             
                                            </li>
                                            <li><a href="contact.html">Contactos</a></li>
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
        
        @yield('content')

        <!-- Footer Start -->
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
                                        <li><a href="https://facebook.com/firsteducationmz"><i class="zmdi-hc-ul"></i></a></li>
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
                                    <li><a href="https://forms.gle/tdAP9kS7eTRYTwoX9">Inscrições universitárias</a></li>
                                    <li><a href="https://forms.gle/vbzmirbw6YJzR79j8">Bolsas de Estudo</a></li>
                                    <li><a href="#">Cursos Online</a></li>
                                    <li><a href="https://forms.gle/7YWuDzZByBa8aV8M7">Ano de Fundação</a></li>
                                    <li><a href="#">CV</a></li>
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
                                <p>Av. Ahmed Sekou Touré, n. 1552<br>Maputo-Moçambique</p>
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

        <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>

        <script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{ asset('assets/js/ajax-mail.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.mb.YTPlayer.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>

</html>
