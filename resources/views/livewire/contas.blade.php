<div>
<div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Minha Conta</h2>
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
                        <img src="{{asset('img/logo/Logo.png')}}" alt="FirstEducation" />
                            <!-- <div class="event-date">
                                    <h3>20 <span>jun</span></h3>  
                                </div> -->
                        </div>
                        <div class="event-details-content">
                            <h2></h2>
                            <ul>
                                <li><span>Localização : </span></li>
                                <!-- <li><span>venue : </span>Cristal Centre, 254 New Yourk</li> -->
                            </ul>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Menú</h3>
                            <ul>
                                <li><a href="">Perfil</a></li>
                                <li><a href="">Alterar Palavra-passe</a></li>
                                <li><a href="">Políticas de privacidade</a></li>
                                <li><a href="">Sobre</a></li>
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
