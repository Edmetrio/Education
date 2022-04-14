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
                            <img src="{{asset('img/logo/Logo.png')}}" alt="First Education" />
                            <!-- <div class="event-date">
                                    <h3>20 <span>jun</span></h3>  
                                </div> -->
                        </div>
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

                        @if($showData == true)
                        <div class="event-details-content col-md-4">
                            <h2>Meu Perfil</h2>
                            <ul>
                                <li><span>Nome : </span>{{$users->name}}</li>
                                <li><span>E-mail : </span>{{$users->email}}</li>
                                <li><span>Foto : </span><img src="{{asset('storage')}}/{{$users->icon}}" alt="{{$users->icon}}" /></li>
                                <button type="submit" wire:click.prevent="edit('{{$users->id}}')" class="btn btn-primary btn-sm">Alterar</button>
                            </ul>
                        </div>
                        @endif


                        @if($updateData == true)
                        <form>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nome:</strong>
                                        <input type="text" wire:model="nome" class="form-control" placeholder="Weillan Song">
                                        @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Icon:</strong>
                                        <input type="file" wire:model="new_icon" class="form-control" placeholder="image">
                                        @if($new_icon)
                                        <img src="{{$new_icon->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
                                        @else
                                        <img src="{{ asset('storage')}}/{{$old_icon}}" style="width: 15%; text-align: center;" alt="" />
                                        @endif
                                        <input type="hidden" wire:model='old_icon'>
                                        @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" wire:click.prevent="update('{{$edit_id}}')" class="btn btn-primary">Alterar</button>
                                </div>
                            </div>
                        </form>
                        @endif

                        @if($passwordData == true)
                        @include('livewire.passwords')
                        @endif
                    </div>
                </div>

                @if($politicaData == true)
                <section class="notice-area pt-150 pb-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="notice-left">
                                    <h3>políticas </h3>
                                    <div class="single-notice-left mb-25 pb-25">
                                        <p class="text-justify">Empenhados em salvaguardar a privacidade dos visitantes do nosso site, esta política informa como tratamos as informações pessoais dos nossos usuários. Por favor, leia atentamente as informações a seguir, elas explanam como os seus dados pessoais podem ser coletados e utilizados, e como são protegidos no site. Ao fornecer informações pessoais ou navegar no site, você concorda automaticamente com as regras de utilização, proteção e segurança estabelecidas neste aqui. </p>
                                        <br>
                                        <p class="text-justify"> A coleta informações pessoais capazes de identificar os Usuários, quando esses: (i) cadastram-se em nosso site; (ii) solicitam uma reserva ou realizam um pagamento via site; (iii) entram em contato conosco através do site.
                                            Consultor ou Central de Atendimento; (iv) preenchem qualquer formulário digital ou físico.</p>
                                    </div>
                                    <div class="single-notice-left mb-25 pb-25">
                                        <h4>Política Cookie</h4>
                                        <p class="text-justify">A FE pode recebe e armazenar automaticamente, por meio de cookies, informações em seus servidores sobre as atividades realizadas no navegador do Usuário. Os registros de eventos e atividades no site FE serão utilizados apenas para fins dos serviços prestados. A FE reserva-se no direito de utilizar esses registros, de forma individualizada, caso exista ordem judicial neste sentido ou sobrevenha à ocorrência de eventos que exijam tais medidas, incluindo, mas não se limitando a investigações que a FE promova na tentativa de elucidar casos de evidência de autoria ou acesso, ataques de hackers, alterações indevidas nos sistemas, fornecer elementos de prova em procedimentos judiciais, entre outras </p>
                                    </div>
                                    <hr>
                                    <div class="single-notice-left mb-25 pb-25">
                                        <h4>Política de Fornecimento dos documentos</h4>
                                        <p>
                                            <li class="text-justify">Os dados recebidos dos Candidatos durante o processo de compra trafegam utilizando processo de criptografia padrão de Internet. Todos os dados que passam pelo processo de entrega são automaticamente codificados. Assim, seus dados pessoais, e tida informação fornecida no processo de entrega são codificados antes de serem transmitidos</li>
                                            <li class="text-justify">Qualquer informação fornecida pelos Candidatos será coletada e guardada, com segurança.</li>
                                            <li class="text-justify">Os dados pessoais cedidos pelos Candidatos serão gravados na base de dados da FE, que será a única responsável por um armazenamento seguro, nos termos desta Política de Privacidade.</li>
                                            <li class="text-justify">A FE se utiliza das informações coletadas para os seguintes propósitos gerais: (i) informar a respeito de novos produtos e promoções; (ii) aperfeiçoar a experiência de usabilidade do usuários no site; (iii) gerar relatórios estatísticos de navegação, sem que haja identificação dos Usuários; (v) responder às dúvidas e solicitações (iv) realizar campanhas de comunicação.</li>
                                            <li class="text-justify">É de responsabilidade de o usuário garantir que os dados pessoais fornecidos possuem veracidade. A FE não assume qualquer responsabilidade no caso da inexatidão dos dados informados pelo Usuário.</li>
                                            <li>É de responsabilidade do Candidato a criação e manutenção da palavra-passe e de seu logins de acesso quando necessários. Caso o Candidato tome conhecimento ou suspeite que sua senha tenha sido descoberta, deverá alterá-la imediatamente.</li>
                                        </p>
                                    </div>
                                    <div class="single-notice-left mb-25 pb-25">
                                        <h4>Política de Privacidade</h4>
                                        <li class="text-justify">A FE pode solicitar dados pessoais de seus clientes por telefone </p>
                                        <li class="text-justify">Reiteramos que a FE não solicita dados bancários ou de cartão de crédito ou senhas de seus clientes por e-mail. Se o usuário receber este tipo de abordagem deve desconsidere-la e, se possível, encaminhar o ocorrido para a equipe da FE através do e-mail pelo email info@firsteducation.edu.mz</li>
                                        <li class="text-justify">Ao tomar conhecimento de alguma promoção realizada pela FE consulte o site ou a nossa equipe para se certificar de sua veracidade. Caso a informação seja equivocada, desconsidere-a.</li>
                                        <li class="text-justify">Nenhuma das informações fornecidas a FE por qualquer canal poderá ser usada, vendida ou compartilhada com outras pessoas ou empresas não afiliadas a FE, exceto para cumprimento de ordem de autoridade judicial</li>
                                        <li class="text-justify">Caso opte por isso, seus dados poderão ser utilizados para o envio de nosso e-mail. Em todas as nossas comunicações feitas através do e-mail, colocamos um link para remoção de cadastro.
                                            A FE poderá eventualmente atualizar esta política sem aviso prévio. As mudanças mais significativas, quando oportuno, poderão ser comunicadas em área de destaque no web site ou através de e-mail.</li>
                                        <li class="text-justify">Esta política não se aplica a nenhuma outra empresa, mesmo para as que sejam fornecidos links a seus respectivos sites. É recomendado que o Usuário, ao ser redirecionado para sites externos, consultem sempre as respectivas políticas de privacidade antes de fornecer seus dados ou informações.</li>
                                        <li class="text-justify">A FE tomará as medidas possíveis para manter a confidencialidade e a segurança descritas nessa política. Para obter mais informações entre em contato através de nosso Fale Conosco.</li>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="notice-right">
                                    <div class="single-notice-right mb-25 pb-25">
                                        <h3>First Education</h3>
                                        <p>A First Education é uma agência moçambicana que tem como onjectivo principal ajudar os estudantes e realizar o sonho de estudar no exterior </p>
                                    </div>
                                    <div class="single-notice-right mb-25 pb-25">
                                        <h3>Serviços</h3>
                                        <p>A First Education dispõe dos seguintes serviços:
                                            <li>Bolsas de Estudo</li>
                                            <li>Inscrição Universitária</li>
                                            <li>Ano de Fundação</li>
                                            <li>Cursos On-line</li>
                                            <li>Entre outros.</li>
                                        </p>
                                    </div>
                                    <div class="single-notice-right">
                                        <h3>Endereço Físico</h3>
                                        <p>A First Education está localizada na Av. Salvador Allende, no Prédio nº. 42, 2º andar, na Cidade de Maputo, em Moçambique </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endif
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Menú</h3>
                            <hr>
                            <ul>
                                <li><a href="" wire:click.prevent="index()">Perfil</a></li>
                                <li><a href="" wire:click.prevent="editPassword()">Alterar Palavra-passe</a></li>
                                <li><a href="" wire:click.prevent="politica">Políticas de privacidade</a></li>
                                <li><a href="{{ url('sobre')}}">Sobre</a></li>
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
