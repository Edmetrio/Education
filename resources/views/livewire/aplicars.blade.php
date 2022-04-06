<div>
    @include('livewire.politicas')
    @include('livewire.perfils')
    @include('livewire.aceitacaos')
    @include('livewire.documento')
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Como Aplicar</h2>
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
                        
                        <div class="course-details-content">
                            <h2>Como Aplicar
                            </h2>
                            <p>Encontra-se todos passos necessários para efectuar uma aplicação na First Education Solution Lda, desde os requisitos necessários até a obtenção da aceitação
                            </p>
                            <div class="course-details-content">
                                <div class="pb-2">
                                    <h3 class="text-uppercase h4 font-weight-bold">Passo 1 - Encontre o seu programa
                                    </h3>
                                    <p>A FIRST EDUCATION oferece programa de mestrado e licenciatura! Entre em contacto com o <a href="https://wa.me/+258869125903" style="color: #51BF45; font-weight: bold;">agente </a> para saber da disponilidade do curso, país e os possíveis valores inclusos.
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <h3 class="text-uppercase h4 font-weight-bold">Passo 2 - Escolha o serviço
                                    </h3>
                                    <p>A First Education oferece serviço de <a href="{{ url('servico')}}">Bolsa de estudo</a>, <a href="{{ url('servico')}}"> Inscrição universitária</a>, <a href="{{ url('servico')}}">Ano de Fundação e curso on-line. </a>Caso tenha uma dúvida, entre em contacto com o <a href="https://wa.me/+258869125903" style="color: #51BF45; font-weight: bold;">agente</a> para melhor esclarecimento antes de escolher o serviço.
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <h3 class="text-uppercase h4 font-weight-bold">Passo 3 - Verifique os requisitos
                                    </h3>
                                    <p><a type="button" data-toggle="modal" data-target="#addStudentModal" style="color: #51BF45; font-weight: bold;">Verifique os requisitos da aplicação</a> necessário para aplicar-se na First Education.
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <h3 class="text-uppercase h4 font-weight-bold">Passo 4 - Faça a inscrição on-line
                                    </h3>
                                    <p class="margin">Após unir todos documentos solicitado, preencha o formulário on-line com os dados e anexa os documentos.
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <h3 class="text-uppercase h4 font-weight-bold">Passo 5 - Aguardar o Perfil das universidades
                                    </h3>
                                    <p class="margin">Depois de finalizar a aplicação, a First Education enviará um <a type="button" data-toggle="modal" data-target="#PerfilModal" style="color: #51BF45; font-weight: bold;">perfil das Universidades</a> de acordo com os países escolhidos e os respectivos requisitos.<br />
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <h3 class="text-uppercase h4 font-weight-bold">Passo 6 - Comprovativo de Candidato
                                    </h3 class="text-uppercase h4 font-weight-bold">
                                    <p class="margin">A First Education enviará comprovativo de candidatura de todas as Universidades inscritas. Nesse processo a First Education poderá solicitar <a  type="button" data-toggle="modal" data-target="#documentoModal" style="color: #51BF45; font-weight: bold;"> documentos adicionais</a>, assim como pagamento de taxa de candidatura, caso a Universidade inscrita cobre.<br />
                                    </p>
                                </div>
                                <div class="pb-2">
                                    <h3 class="text-uppercase h4 font-weight-bold">Passo 7 - Carta de Aceitação
                                    </h3>
                                    <p class="margin">Após cumprir com todos requisitos solicitado, a First Education enviará uma <a type="button" data-toggle="modal" data-target="#AceitacaoModal" style="color: #51BF45; font-weight: bold;">carta de aceitação</a> quando tiver êxito no seu processo, ou carta de rejeição quando não for aceite a Universidade<br />
                                    </p>
                                </div>
                                <hr>
                                <div class="reply-area">
                                    <form id="contact-form" action="" method="post">
                                        <a class="reply-btn" href="{{ url('servico')}}" data-text="send"><span>Aplicar</span></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="reply-area">
                            <h3>Entre em contacto connosco
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
                            <p>Pode entrar em contacto connosco preenchendo.
                            </p>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Nome</p>
                                        <input type="text" wire:model="nome">
                                        <span class="text-danger">
                                            @error('nome')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="email" wire:model="email">
                                        <span class="text-danger">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Assunto</p>
                                        <input type="text" wire:model="assunto">
                                        <p>Mensagem</p>
                                        <textarea wire:model="mensagem" cols="15" rows="10"></textarea>
                                        <span class="text-danger">
                                            @error('mensagem')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <button wire:click.prevent="store()" class="default-btn" type="submit"><span>Enviar</span></button> 
                            </form>
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
                        <!--                         <div class="single-blog-widget">
                            <h3>Aceitações</h3>
                            <div class="single-tag">
                                <a href="blog-details.html" class="mr-10 mb-10">course</a>
                                <a href="blog-details.html" class="mr-10 mb-10">education</a>
                                <a href="blog-details.html" class="mb-10">teachers</a>
                                <a href="blog-details.html" class="mr-10">learning</a>
                                <a href="blog-details.html" class="mr-10">university</a>
                                <a href="blog-details.html">events</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>