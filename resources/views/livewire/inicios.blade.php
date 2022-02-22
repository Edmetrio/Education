<div>

    <!-- Courses Area Start -->
    <div class="courses-area pt-150 text-center">
        <div class="container" style="margin-bottom: 5%;">
            <div class="row">
                @foreach($servico as $s)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <a href="{{url("inscricao")}}"><img src="{{asset('storage')}}/{{$s->icon}}" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="{{url("inscricao")}}">{{ $s->nome }}</a></h3>
                            <p>{{ $s->descricao }}. </p>
                            <a class="default-btn" href="{{url("inscricao")}}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <a href="{{url("inscricao")}}"><img src="img/course/course1.jpg" alt="course" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="{{url("inscricao")}}">Ano de Fundação</a></h3>
                            <p>Este serviço se caracteriza pelo facto do cliente pagar todas as despesas de deslocamento e estudos, como também, pagamento completo das propinas anuais ou mensais. </p>
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
        </div> -->
    </div>

    <div class="event-area two text-center pt-100 pb-145">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Nossos Parceiros</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event1.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">Marwadi University</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Rajkot, Índia</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade que encontra-se num país nobre da Índia.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-event hidden-sm hidden-xs">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event3.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">Shandong Jiaotong University</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Jinan, China</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade que ocupa terceira posição do ranking na China.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event2.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">NEAR EAST UNIVERSITY</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Nicósia, Chipre</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade privada que encontra-se no centro do país.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-event hidden-sm hidden-xs">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event3.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">Shandong Jiaotong University</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Jinan, China</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade que ocupa terceira posição do ranking na China.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="event-area two text-center pt-100 pb-145">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Depoimentos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event1.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">Marwadi University</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Rajkot, Índia</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade que encontra-se num país nobre da Índia.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-event hidden-sm hidden-xs">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event3.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">Shandong Jiaotong University</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Jinan, China</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade que ocupa terceira posição do ranking na China.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event2.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">NEAR EAST UNIVERSITY</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Nicósia, Chipre</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade privada que encontra-se no centro do país.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-event hidden-sm hidden-xs">
                        <div class="event-img">
                            <a href="event-details.html"><img src="{{asset('img/event/event3.jpg')}}" alt="event"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="event-details.html">Shandong Jiaotong University</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Jinan, China</li>
                            </ul>
                            <div class="event-content-right">
                                <p>Uma Universidade que ocupa terceira posição do ranking na China.</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="event-details.html">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>