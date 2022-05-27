<div>
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <img src="{{asset('img/banner/00.png')}}" alt="about">
        </div>
    </div>

    <div class="courses-details-area blog-area pt-150 pb-20">
        <div class="container">
            <div class="row">

                <div class="col-md-8 mb-50">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2 class="text-center">{{$pacotes->nome}}</h2>
                            @if(!empty($successMessage))
                            <div class="alert alert-success">
                                {{ $successMessage }}
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
                            <hr>

                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                                        <p>Dados Pessoais</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                                        <p>Info. Académico</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                                        <p>Info. Superior</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
                                        <p>Anexos</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-5" type="button" class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">5</a>
                                        <p>Sucesso</p>
                                    </div>
                                </div>
                            </div>

                            <form>
                                <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                                    @include('livewire.pessoa')
                                </div>

                                <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                                    @include('livewire.academica')
                                </div>

                                <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                                    @include('livewire.superior')
                                </div>

                                <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
                                    @include('livewire.anexo')
                                </div>


                                <div class="row setup-content {{ $currentStep != 6 ? 'displayNone' : '' }}" id="step-5">
                                    @include('livewire.resumo')                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>Aplica-se já</h3>
                            <hr>
                            <ul>
                                <li><a href="{{ url('candidatos') }}">Dados Pessoais</a></li>
                                <li><a href="{{ url('academicas') }}">Dados Académicas</a></li>
                                <li><a href="{{ url('superiors') }}">Dados Superiores</a></li>
                                <li><a href="{{ url('anexos') }}">Anexos</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <hr>
            </div>
        </div>
        <!-- Blog End -->
    </div>
</div>