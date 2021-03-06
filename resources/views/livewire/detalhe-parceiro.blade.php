<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>{{ $parceiro->nome }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="event-details-area blog-area pt-150 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="event-details">
                        <div class="event-details-img">
                            <img src="{{asset('storage')}}/{{$parceiro->icon}}" alt="event-details">
                            <!-- <div class="event-date">
                                    <h3>20 <span>jun</span></h3>  
                                </div> -->
                        </div>
                        <div class="event-details-content">
                            <h2>{{ $parceiro->nome }}</h2>
                            <ul>
                                <li><span>Localização : </span>{{ $parceiro->localizacao}}</li>
                                <!-- <li><span>venue : </span>Cristal Centre, 254 New Yourk</li> -->
                            </ul>
                            <p>{{ $parceiro->texto }}</p>
                            <p>{{ $parceiro->texto2 }}</p>
                            <p>{{ $parceiro->texto3 }}</p>
                            <div class="speakers-area fix">
                                <h4>Outros Parceiros</h4>
                                @foreach($parceiros as $p)
                                <div class="single-speaker">
                                    <div class="speaker-img">
                                        <img src="{{asset('storage')}}/{{$p->icon}}" width="120px" height="120px" alt="parceiros">
                                    </div>
                                    <div class="speaker-name">
                                        <h5><a href="{{ url('parceiro', $p->id) }}"> {{ $p->nome }} </a></h5>
                                        <p>{{ $p->localizacao }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Serviços</h3>
                            <ul>
                                @foreach($servicos as $s)
                                <li><a href="{{ url('servico', $s->id)}}">{{ $s->nome }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <div class="single-blog-banner">
                                <img src="{{asset('img/blog/blog-img.jpg')}}" alt="blog">
                                <h2>Escolha<br> Acertada<br> First Education</h2>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>Últimos Poosts</h3>
                            @foreach($poost as $p)
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="{{asset('storage')}}/{{$p->icon}}"><img src="{{asset('storage')}}/{{$p->icon}}" style="width: 70px; height: 70px;" alt="post">
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="{{asset('storage')}}/{{$p->icon}}">{{ $p->nome }}</a></h4>
                                    <p>{{ $p->created_at}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>