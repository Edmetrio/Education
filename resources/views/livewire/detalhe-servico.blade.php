<div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 text-center">
            <img src="{{asset('img/banner/44.png')}}" alt="about">
        </div>
    </div>

    <div class="courses-details-area blog-area pt-150 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2>{{ $servico->nome }}</h2>
                            <p> {{ $servico->texto }}</p>
                            <div class="single-course-left">
                                <h3>Requisitos Necessários:
                                </h3><br>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Uma Cópia de Passaporte Válida/ Bilhete de Identificação (BI)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Certificado/Diploma/Declaração de Notas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Talão de Depósito
                                    </label>
                                </div>
                                <hr>
                            </div>

                            <div class="single-course-left">
                                <h3>Pacotes
                                </h3><br>
                                <p>Número de Pacotes aplicáveis em cada Universidade
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                @foreach($servico->pacotes as $s)
                                                <th scope="col">{{ $s->nome }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($servico->pacotes as $s)
                                                <td>{{number_format($s->valor, 2, ',','.') ?? ''}}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>Cada pacote representa o número de aplicação(inscrição) para cada Universidade, ou seja,
                                    escolher o 1 Pacote, será aplicado somento em uma Universidade, se escolher o 3 Pacotes,
                                    será aplicado para três Universidades. De salientar que quanto mais aplicações fizer maior
                                    é a probabilidade de ser aceite.</p>
                            </div>
                            <hr>
                            <div class="single-course-left">
                                <h3>Conta Bancária</h3><br>
                                <p class="margin">Entidade: Millennium Bim<br>
                                    Número da Conta: 565129179<br>
                                    NIB: 0001 0000 0056 5129 1795 7<br>
                                    Titular: FIRST EDUCATION SOLUTION LDA
                                </p>
                            </div>
                            <hr>

                            <div class="single-course-left">
                                <h3>10% da Propina</h3><br>
                                <div class="form-check">
                                    
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Confirmo que a First Education será minha agente e que pagarei 10% da propina em caso de aceitação.
                                        <p>Confirmo que no caso de insatisfação, posso recorrer a devolucão de 50% do valor da aplicação antes de efectuar a devida aplicação nas Universidades</p>
                                    </label>
                                </div>
                            </div>
                            <hr>

                            <div class="single-course-left">
                           
                                <h3>Confirmação</h3><br>
                                <p class="margin">
                                    Depois de reunir todos documentos solicitados, o próximo passo será de aplicar-se ou inscrever-se
                                    no nosso <i>site</i> para oficializar o processo de candidatura.
                                </p>
                            </div>
                            <hr>

                        </div>
                        <div class="reply-area">
                            <form id="contact-form" action="" method="post">
                                @if($servico->id === '3b719c3b-2bd8-494d-a5d5-a3ef8aa288d3')
                                <a class="reply-btn" href="{{ route('candidatos', $servico->id)}}" data-text="send"><span>Inscricao</span></a>
                                @elseif($servico->id === 'f2b13ba4-00cb-4098-ab73-cc58d4de5240')
                                <a class="reply-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSeCuHFaC0m8-Td_y5TTZEKO8ZHAjkXyv8v3VcZG0Dm5Tczubg/viewform" data-text="send"><span>Bolsa</span></a>
                                @elseif($servico->id === '6a69933a-9a66-4f4a-9dce-31479b294d8f')
                                <a class="reply-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSeOqlvRAacJjWmStouk60ULS67wYqsZtyegIw0q6MpW7oKUoQ/viewform" data-text="send"><span>Ano</span></a>
                                @elseif($servico->id === '832900de-eb34-4348-87f6-33993fa3cbea')
                                <a class="reply-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSfJsXy-wndVbJR8U6Q8JcxZUYH11evq5AYooeqlavUzU8BjpQ/viewform" data-text="send"><span>Curso</span></a>
                                @elseif($servico->id === 'ea0bd96d-e519-42d8-8ac2-feae05ba64d9')
                                <a class="reply-btn" href="" data-text="send"><span>Cotação</span></a>
                                @endif
                                <p class="form-messege"></p>
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