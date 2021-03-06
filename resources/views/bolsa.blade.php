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
                            <h2>Bolsa de Estudo</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Blog Start -->
<div class="courses-details-area blog-area pt-150 pb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="courses-details">
                    <div class="course-details-content">
                        <h2>Bolsa de Estudo
                        </h2>
                        <p>A empresa fornece o serviço de Bolsas de Estudo completas e parciais. As completas são aquelas em que o cliente não paga nenhuma despesa na faculdade, se beneficiando de acomodação, seguro médico, subsídio e ticket de viagem. As parciais são aquelas em que o aluno paga uma percentagem estipulada pela universidade que incide apenas na propina, sendo que as outras despesas estão ao cargo do cliente. Neste serviço, a empresa não cobra nenhuma comissão.
                        </p>
                        <!-- <div class="course-details-left"> -->
                        <div class="single-course-left">
                            <h3>Requisitos Necessários:
                            </h3><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uma Cópia de Passaporte Válida/ Bilhete de Identificação (BI)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Certificado/Diploma/Declaração de Notas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Talão de Depósito
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
                                            <th scope="col">1 Pacote</th>
                                            <th scope="col">2 Pacotes</th>
                                            <th scope="col">4 Pacotes</th>
                                            <th scope="col">6 Pacotes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2.750,00mts</td>
                                            <td>5.500,00mts</td>
                                            <td>11.000,00mts</td>
                                            <td>16.000,00mts</td>
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
                            <p class="margin">Entidade: BCI<br>
                                Número da Conta: 180454210001<br>
                                NIB: 000800008045424210195<br>
                                Titular: Milena Rael Macuácua
                            </p>
                        </div>
                        <hr>

                        <div class="single-course-left">
                            <h3>Confirmação</h3><br>
                            <p class="margin">
                                Depois de reunir todos documentos solicitados, o próximo passo será de aplicar-se ou inscrever-se
                                no nosso <i>site</i>para oficializar o processo de candidatura.
                            </p>
                        </div>
                        <hr>

                    </div>
                    <div class="reply-area">
                        <form id="contact-form" action="http://preview.hasthemes.com/eduhome/mail.php" method="post">
                            <a class="reply-btn" href="https://forms.gle/vbzmirbw6YJzR79j8" data-text="send"><span>Aplicar</span></a>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-sidebar right">
                    <div class="single-blog-widget mb-50">
                        <h3>Aplica-se já</h3>
                        <hr>
                        <ul>
                            <li><a href="{{url("inscricao")}}">Inscrições universitárias</a></li>
                            <li><a href="{{url("bolsa")}}">Bolsas de Estudos</a></li>
                            <li><a href="{{url("online")}}">Cursos Online</a></li>
                            <li><a href="{{url("fundacao")}}">Ano de Fundação</a></li>
                            <li><a href="#">Prdução de CV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
</div>
    @endsection