<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>lista dos candidatos</h2>
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
                <h3> @if(!empty($successMessage))
                    <div class="alert alert-success">
                        {{ $successMessage }}
                    </div>
                    @endif
                </h3>

                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="col-xs-12 col-sm-12 col-md-6 mb-120">
                        <div class="form-group">
                            <strong>Candidato:</strong>
                            <select class="form-control" wire:model="selectedCandidato">
                                <option>Seleccione o Candidato</option>
                                @foreach($candidato as $s)
                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @if (!is_null($selectedCandidato))
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <h4 class="alert alert-primary">Dados Pessoais</h4>
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Nome completo</p>
                                    <p><small>Digite o nome exactamente como aparece na Identificação</small></p>
                                    <ul>
                                        <h4><strong>{{$pessoa->nome}}</strong></h4>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Sexo</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$pessoa->sexos->nome}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Nacionalidade</p>
                                    <ul>
                                        @foreach($pessoa->nacionalidades as $n)
                                        <li>
                                            <h4><strong>{{$n->nome}}</strong></h4>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Data de Nascimento</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$pessoa->nascimento}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Número do Passaporte</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$pessoa->passaporte}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Número do Telefone</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$pessoa->telefone}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>E-mail</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$pessoa->email}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($pessoa->academicas as $a)

                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <h4 class="alert alert-primary">Dados Acadêmicos</h4>

                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Escola Secundária ou Universidade</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$a->escola}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Término do Ensino</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$a->termino}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>País que se formou</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$a->pais->nome}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Certificado</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{$a->certificado}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Certificado</p>
                                    <ul>
                                        @foreach($a->idiomas as $i)
                                        <li>
                                            <h4><strong>{{$i->nome}}</strong></h4>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Exame de Proficiência</p>
                                    <ul>
                                        @foreach($a->exames as $e)
                                        <li>
                                            <h4><strong>{{ $e->nome ?? 'Sem Exame'}}</strong></h4>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($pessoa->superiors as $s)
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <h4 class="alert alert-primary">Dados Superior</h4>
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Grau de Ensino</p>
                                    <ul>
                                        @foreach($a->exames as $e)
                                        <li>
                                            <h4><strong>{{ $s->graus->nome}}</strong></h4>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Curso</p>
                                    <ul>
                                        @foreach($a->exames as $e)
                                        <li>
                                            <h4><strong>{{ $s->curso}}</strong></h4>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Ano de Entrada</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{ $s->intakes->nome}}</strong></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Pacote</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{ $s->pacotes->nome}}</strong></h4>
                                            <h4><strong>{{ $s->pacotes->valor }}</strong>{{$s->moedas->nome}}</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Orçamento</p>
                                    <ul>
                                        <li>
                                            <h4><strong>{{ $s->orcamento}}</strong>{{$s->moedas->nome}}</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Países de Interesse</p>
                                    <ul>
                                        @foreach($s->pais as $p)
                                        <li>
                                            <h4><strong>{{ $p->nome}}</strong></h4>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-10">
                        <div class="single-event mb-10">
                            <div class="event-content text-left">
                                <div class="event-content-left pl-20">
                                    <p>Idioma que deseja estudar</p>
                                    <ul>
                                        @foreach($s->idiomas as $i)
                                        <li>
                                            <h4><strong>{{ $i->nome}}</strong></h4>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <!-- @if(!empty($pessoa))
                    <div class="form-group">
                        <table class="table">
                            <tr>
                                <td class="alert alert-primary">Nome:</td>
                                <td><strong>{{$pessoa->nome ?? ''}}</strong></td>
                            </tr>
                            <tr>

                                <td>Sexo:</td>
                                <td><strong>{{$pessoa->sexos->nome ?? ''}}</strong></td>
                            </tr>
                            <tr>
                                <td>Nacionalidade:</td>
                                @foreach($pessoa->nacionalidades as $n)
                            <tr>
                                <td><strong>{{ $n->nome ?? '' }}</strong></td>
                            </tr>
                            @endforeach
                            </tr>
                            <tr>
                                <td>Data de Nascimento:</td>
                                <td><strong>{{ $pessoa->nascimento ?? ''}}</strong></td>
                            </tr>
                            <tr>
                                <td>Número do Passaporte:</td>
                                <td><strong>{{ $pessoa->passaporte ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Número do Telefone</td>
                                <td><strong>{{ $pessoa->telefone ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td><strong>{{ $pessoa->email ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td class="alert alert-primary">Academico</td>
                                <td><strong></strong></td>
                            </tr>
                            @foreach($pessoa->academicas as $a)
                            <tr>
                                <td>Escola Secundário ou Universidade</td>
                                <td><strong>{{ $a->escola ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Término do Ensino</td>
                                <td><strong>{{ $a->termino ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Pais que se formou</td>
                                <td><strong>{{ $a->pais->nome ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Certificado</td>
                                <td><strong>{{ $a->certificado ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Idioma de Proficiência</td>
                                @foreach($a->idiomas as $i)
                                <td><strong>{{ $i->nome ?? '' }}</strong></td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>Exame de Proficiência</td>
                                @foreach($a->exames as $e)
                                <td><strong>{{ $e->nome ?? 'Sem Exame'}}</strong></td>
                                @endforeach
                            </tr>
                            @endforeach
                            <tr>
                                <td class="alert alert-primary">Superior</td>
                            </tr>
                            @foreach($pessoa->superiors as $s)
                            <tr>
                                <td>Grau de Licenciatura</td>
                                <td><strong>{{ $s->graus->nome ?? '' }}</strong></td>

                            </tr>
                            <tr>
                                <td>Curso</td>
                                <td><strong>{{ $s->curso ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Ano de Entrada</td>
                                <td><strong>{{ $s->intakes->nome ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Pacote</td>
                                <td><strong>{{ $s->pacotes->nome ?? ''}}</strong></td>
                                <td><strong>{{ $s->pacotes->valor ?? ''}}</strong>{{ $s->moedas->nome ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Orçamento</td>
                                <td><strong>{{ $s->orcamento ?? '' }}</strong></td>
                            </tr>
                            <tr>
                                <td>Países de Interesse</td>
                                @foreach($s->pais as $p)
                                <td><strong>{{ $p->nome ?? '' }}</strong></td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>Idioma que deseja estudar</td>
                                @foreach($s->idiomas as $i)
                                <td><strong>{{ $i->nome ?? '' }}</strong></td>
                                @endforeach
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @else
                    <h1>Dados não encontrados</h1>
                    @endif -->
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Serviços</h3>
                            <ul>

                                <li><a href=""></a></li>

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
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a style="width: 70px; height: 70px;" alt="post">
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4></a></h4>
                                    <p></p>
                                </div>
                            </div>

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