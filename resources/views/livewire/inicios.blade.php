<div>
    @include('livewire.depoimentoModal')
    <!-- Courses Area Start -->
    <div class="courses-area pt-150 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Serviços</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($servico as $s)
                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 5%;">
                    <div class="single-course">
                        <a href="{{ url('servico', $s->id) }}"><img src="{{ ('storage')}}/{{$s->icon}}" alt="{{$s->nome}}" width="200px" height="200px">
                        </a>
                        <div class="course-content">
                            <h3 style="text-align: center;"><a href="{{ url('servico', $s->id) }}">{{ $s->nome }}</a></h3>
                            <p>{{ $s->descricao }}. </p>
                            <a class="default-btn" href="{{ url('servico', $s->id) }}">Mais Detalhes</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="teacher-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Últimos postes</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($poost as $p)
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-teacher">
                        <div class="single-teacher-img">
                            <a href="{{ url('comentarios', $p->id) }}"><img src="{{asset('storage')}}/{{$p->icon}}" alt="{{$p->nome}}"></a>
                        </div>
                        <div class="single-teacher-content text-center">
                            <h2><a href="{{ url('comentarios', $p->id) }}">{{ $p->nome }}</a></h2>
                            <h4>{{ $p->descricao }}</h4>
                            <ul>
                                <li><a href="https://facebook.com/firsteducationmz"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/firsteducationmz"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://wa.me/+258869125903"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="event-area two text-center pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Parceiros</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($parceiro as $p)
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="{{ url('parceiro', $p->id) }}"><img src="{{asset('storage')}}/{{$p->icon}}" style="width: 240px; height: 180px;" alt="parceiros"></a>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="{{ url('parceiro', $p->id) }}">{{ $p->nome }}</a></h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>{{ $p->localizacao}}</li>
                            </ul>
                            <div class="event-content-right">
                                <p>{{ $p->descricao }}</p>
                            </div>
                            <div class="event-content-right">
                                <a class="default-btn" href="{{ url('parceiro', $p->id) }}">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="event-area two text-center pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>Depoimentos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($depoimento as $d)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog mb-60">
                        <a href="{{ url('depoimento', $d->id) }}"><img src="{{asset('storage')}}/{{$d->icon}}" alt="course"></a>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>{{ $d->created_at }}</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="{{ url('depoimento', $d->id) }}">{{$d->nome}} </a></h2>
                                <h3>{{ $d->descricao }}</h3>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div style="float: right;">
                {{$depoimento->links()}}
            </div>
        </div>
    </div>
</div>
</div>