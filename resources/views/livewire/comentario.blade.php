<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>{{$poost->nome}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-details-area blog-area pt-150 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="courses-details">
                        <div class="courses-details-img">
                            <img src="{{asset('storage')}}/{{$poost->icon}}" width="400" alt="{{$poost->nome}}">
                        </div>
                        <div class="course-details-content">
                            <h2>{{$poost->nome}}</h2>
                            <p>{{$poost->descricao}}</p>
                            <div class="event-date">
                                <h3>{{$item}} <span>Like</span></h3>
                            </div>
                        </div>
                        <div class="reply-area">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Opss!</strong> Algum problema com seu formulário<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Comentário</p>
                                        <textarea wire:model="nome" cols="15" rows="5"></textarea>
                                        <span class="text-danger">
                                            @error('nome'){{$message}}@enderror
                                        </span>
                                        @guest
                                        <a href="{{url('register')}}" class="default-btn" type="submit"><span>Comentar</span></a>
                                        @endguest
                                        @auth
                                        <button wire:click.prevent="store()" class="default-btn" type="submit"><span>Comentar</span></button>
                                        @endauth
                                    </div>
                            </form>
                            @foreach($comentario as $c)
                            <div class="col-md-1 mt-10">
                                <img class="img-fluid" src="{{asset('img/logo/avatar.jpg')}}" width="30" height="30" />
                            </div>
                            <div class="col-md-11 float-right">
                                <form>
                                    <div class="single-event mb-10">

                                        @guest
                                        @else
                                        @if ($c->users->id === Auth::user()->id)
                                        <p><a href="" wire:click.prevent="delete('{{$c->id}}')" class="float-right mr-10">X</a></p>
                                        @else
                                        @endif
                                        @endif
                                        <!-- <div class="event-date">
                                        <img class="img-fluid" src="{{asset('img/logo/Logo.png')}}" style="width: 100px; text-align: center;" />
                                    </div> -->
                                        <div class="event-content text-left ml-20">
                                            <div class="event-content-left">
                                                <p><strong>{{$c->users->name}}</strong></p>
                                                <ul>
                                                    <li>{{$c->nome}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <small class="float-right">{{ $c->created_at->diffForhumans() }}</small></p>
                                    @if($c->itemcurtirs->count())
                                    
                                    <button style="background-color: white;" class="float-right mr-20" wire:click.prevent="descurtir('{{$c->id}}')">Discurtir </button>
                                    @else
                                    <button style="background-color: white;" class="float-right mr-20" wire:click.prevent="curtir('{{$c->id}}')">Curtir </button>
                                    @endif
                                </form>
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

                    </div>
                    <div class="single-blog-widget mb-50">
                        <div class="single-blog-banner">
                            <img src="{{asset('img/blog/blog-img.jpg')}}" alt="blog">
                            <h2>Escolha<br> Acertada<br> First Education</h2>
                        </div>
                    </div>
                    <div class="single-blog-widget mb-50">
                        <h3>Últimos Poosts</h3>
                        @foreach($ultimo as $p)
                        <div class="single-post mb-30">
                            <div class="single-post-img">
                                <a href="{{ url('comentarios', $p->id) }}"><img src="{{asset('storage')}}/{{$p->icon}}" style="width: 70px; height: 70px;" alt="post">
                                </a>
                            </div>
                            <div class="single-post-content">
                                <h4><a href="{{ url('comentarios', $p->id) }}">{{ $p->nome }}</a></h4>
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