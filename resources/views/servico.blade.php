@extends('templates.templatesSegundo')

@section('content')

		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Serviços</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Course Start -->
        <div class="courses-area pt-150 text-center">
        <div class="container" style="margin-bottom: 5%;">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <a href="{{url("inscricao")}}"><img src="img/course/course1.jpg" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="{{url("inscricao")}}">Inscrição Universitária</a></h3>
                            <p>Este serviço se caracteriza pelo facto do cliente pagar todas as despesas de deslocamento e estudos, como também, pagamento completo das propinas... </p>
                            <a class="default-btn" href="{{url("inscricao")}}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <a href="{{url("bolsa")}}"><img src="img/course/course2.jpg" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="infoBolsa.html">Bolsa de Estudo</a></h3>
                            <p>A empresa fornece o serviço de Bolsas de Estudo completas e parciais.As completas são aquelas em que o cliente não paga nenhuma despesa e As parciais são aquelas... </p>
                            <a class="default-btn" href="{{url("bolsa")}}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-course">
                        <a href="{{url("online")}}"><img src="img/course/course3.jpg" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3><a href="{{url("online")}}">Cursos On-line
                                </a></h3>
                            <p>Este serviço é caracterizado pela candidatura do cliente para um curso técnico-profissional ou linguístico, sendo leccionado à distância por um curto espaço de tempo...</p>
                            <a class="default-btn" href="{{url("online")}}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <a href="{{url("inscricao")}}"><img src="img/course/course1.jpg" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="{{url("inscricao")}}">Ano de Fundação</a></h3>
                            <p>Este serviço se caracteriza pelo facto do cliente pagar todas as despesas de deslocamento e estudos, como também, pagamento completo das propinas... </p>
                            <a class="default-btn" href="{{url("inscricao")}}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <a href="{{url("bolsa")}}"><img src="img/course/course2.jpg" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="infoBolsa.html">Cotação</a></h3>
                            <p>A empresa fornece o serviço de Bolsas de Estudo completas e parciais.As completas são aquelas em que o cliente não paga nenhuma despesa e As parciais são aquelas...</p>
                            <a class="default-btn" href="{{url("bolsa")}}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-course">
                        <a href="{{url("online")}}"><img src="img/course/course3.jpg" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="{{url("online")}}">Tradução</a></h3>
                            <p>Este serviço é caracterizado pela candidatura do cliente para um curso técnico-profissional ou linguístico, sendo leccionado à distância por um curto espaço de tempo...</p>
                            <a class="default-btn" href="{{url("online")}}">Mais Detalhes</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        
        </div> 
        </div>       
        <!-- Course End -->

@endsection