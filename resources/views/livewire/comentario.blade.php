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
    <!-- Banner Area End -->
    <!-- Blog Start -->
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
                            <p>{{$poost->descricao}}
                            </p>
                        </div>
                        <div class="reply-area">
                            <h3>Comenta o nosso poster
                            </h3>
                            @if ($message = Session::get('status'))
                            <div>
                                <p class="alert alert-success" class="table p-field p-col-12 p-md-6 table-striped" style="text-align: center;">{{ $message }}</p>
                            </div>
                            @endif
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
                            <p>.
                            </p>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Comentário</p>
                                        <textarea wire:model="nome" cols="15" rows="5"></textarea>
                                        <span class="text-danger">
                                            @error('nome'){{$message}}@enderror
                                        </span>
                                        <button wire:click.prevent="store()" class="default-btn" type="submit"><span>Comentar</span></button>
                                    </div>
                            </form>
                            @foreach($comentario as $c)
                            <div class="col-md-2 mt-20">
                                <img class="img-fluid" src="{{asset('img/logo/avatar.jpg')}}" style="width: 50%; vertical-align: middle;" />
                            </div>
                            <div class="col-md-10 mt-20 float-right">
                                <form>
                                    <div class="single-event mb-10">
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
                                <!-- {{$c->itemcurtirs->count()}} -->
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