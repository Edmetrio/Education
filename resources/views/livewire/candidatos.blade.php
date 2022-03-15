<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Formulário de Aplicação</h2>
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

                <div class="col-md-8 mb-50">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2 class="text-center">Dados Pessoais</h2>
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
                                        <p>Passo 1</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                                        <p>Passo 2</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                                        <p>Passo 3</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
                                        <p>Passo 4</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-5" type="button" class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">5</a>
                                        <p>Passo 5</p>
                                    </div>
                                </div>
                            </div>

                            <form>
                                <!-- <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1"> -->
                                <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Grau</strong>
                                            <select class="form-control" wire:model="grau_id">
                                                <option>Seleccione o Grau</option>
                                                @foreach($grau as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('grau_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Cursos :</strong>
                                            <input type="curso" wire:model="curso" class="form-control" placeholder="Nome">
                                            @error('curso') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Intake:</strong><br>
                                            @foreach($intake as $s)
                                            <label class="radio-inline"><input type="radio" wire:model="intake_id" value="{{ $s->id }}" {{{ $intake_id == $s->id ? "checked" : "" }}}> {{$s->nome}} </label>
                                            @endforeach
                                            @error('intake_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Pacote:</strong>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            @foreach($pacotes->pacotes as $s)
                                                            <th scope="col">{{ $s->nome }}</th>
                                                            @endforeach
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            @foreach($pacotes->pacotes as $s)
                                                            <td>
                                                                <label class="radio-inline"><input type="radio" wire:model="pacote_id" value="{{ $s->id }}" {{{ $pacote_id == $s->id ? "checked" : "" }}}> {{$s->valor}} </label>
                                                            </td>
                                                            @endforeach
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            @error('pacote_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10">
                                        <div class="form-group">
                                            <strong>Orçamento :</strong>
                                            <input type="number" wire:model="orcamento" class="form-control" placeholder="Nome">
                                            @error('orcamento') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <strong>Moeda:</strong>
                                            <select class="form-control" wire:model="moeda_id">
                                                @foreach($moeda as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('moeda_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10">
                                        <div class="form-group">
                                            <strong>País de Interesse:</strong>
                                            <select class="form-control" wire:model="pais_id">
                                                @foreach($pais as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('pais_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <br />
                                            <input type="number" wire:model="" class="form-control" placeholder="Nome">
                                            @error('moeda_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Idioma de Proficiencia</strong>
                                            <select class="form-control" wire:model="idioma_id">
                                                <option>Seleccione o Idioma</option>
                                                @foreach($idioma as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('idioma_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="ThirdStepSubmit">Next</button>
                                        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                                    </div>

                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nome:</strong>
                                            <input type="text" wire:model="nome" class="form-control" placeholder="Nome">
                                            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Sexo:</strong><br />
                                            <label class="radio-inline"><input type="radio" wire:model="sexo_id" value="f197e5cb-6a9c-4033-a96d-023050fde0d3" {{{ $sexo_id == 'f197e5cb-6a9c-4033-a96d-023050fde0d3' ? "checked" : "" }}}> Masculino</label>
                                            <label class="radio-inline"><input type="radio" wire:model="sexo_id" value="7f943f7e-ef1e-4454-9ae2-34d091efbc9d" {{{ $sexo_id == '7f943f7e-ef1e-4454-9ae2-34d091efbc9d' ? "checked" : "" }}}> Feminino</label>
                                            @error('sexo_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-11">
                                        <div class="form-group">
                                            <strong>Nacionalidade:</strong>
                                            <select class="form-control" wire:model="nacionalidade_id.0">
                                                <option>Seleccione o Serviço</option>
                                                @foreach($nacionalidade as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('nacionalidade_id.0') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-1 col-md-1">
                                        <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})" style="margin-bottom: 20%;">+</button>
                                    </div>

                                    @foreach($inputs as $key => $value)
                                    <div class="col-xs-12 col-sm-12 col-md-10">
                                        <div class="form-group">
                                            <strong>Nacionalidade:</strong>
                                            <select class="form-control" wire:model="nacionalidade_id.{{ $value }}">
                                                <option>Seleccione o Serviço</option>
                                                @foreach($nacionalidade as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('nacionalidade_id.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">-</button>
                                    </div>
                                    @endforeach

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Data de Nascimento:</strong>
                                            <input type="date" wire:model="nascimento" class="form-control">
                                            @error('nascimento') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nº do Passaporte:</strong>
                                            <input type="text" wire:model="passaporte" class="form-control">
                                            @error('passaporte') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Telefone:</strong>
                                            <input type="text" wire:model="telefone" class="form-control">
                                            @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>E-mail:</strong>
                                            <input type="text" wire:model="email" class="form-control">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button">Next</button>
                                    </div> -->
                                </div>

                                <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Escola que terminou o ensino :</strong>
                                            <input type="text" wire:model="escola" class="form-control" placeholder="Trichardt School for Christian Education">
                                            @error('escola') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Término :</strong>
                                            <input type="date" wire:model="termino" class="form-control" placeholder="Nome">
                                            @error('termino') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>País:</strong>
                                            <select class="form-control" wire:model="pais_id">
                                                <option>Seleccione o Pais</option>
                                                @foreach($pais as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('pais_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Certificado :</strong>
                                            <input type="date" wire:model="certificado" class="form-control" placeholder="Nome">
                                            @error('certificado') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Idioma de Proficiencia</strong>
                                            <!-- <select class="form-control" wire:model="idioma_id">
                                                <option>Seleccione o Idioma</option>
                                                @foreach($idioma as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select> -->
                                            @foreach($idioma as $s)
                                            <div class="checkbox">
                                                <label><input type="checkbox" wire:model="idioma_id.{{ $s->id }}">{{ $s->nome }}</label>
                                            </div>
                                            @endforeach
                                            @error('idioma_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Exame de Proficiencia</strong>
                                            <select class="form-control" wire:model="exame_id">
                                                <option>Seleccione o Exame</option>
                                                @foreach($exame as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('exame_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div> -->

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Exame de Proficiencia</strong>
                                            <select class="form-control" wire:model="selectedExame">
                                                <option value="">Seleccione a Opção</option>
                                                <option value="nao">Não, nunca fiz</option>
                                                <option value="ainda">Ainda, mas vou fazer o exame</option>
                                                <option value="sim">Sim, já fiz</option>
                                            </select>
                                        </div>
                                    </div>

                                    @if (!is_null($selectedExame))
                                    @if($ainda == true)
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Data :</strong>
                                            <input type="date" wire:model="data" class="form-control">
                                            @error('data') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    @endif

                                    @if($sim == true)
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Exame de Proficiencia</strong>
                                            <select class="form-control" wire:model="exame_id">
                                                <option>Seleccione o Exame</option>
                                                @foreach($exame as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('exame_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nota :</strong>
                                            <input type="text" wire:model="nota" class="form-control">
                                            @error('nota') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Data :</strong>
                                            <input type="date" wire:model="data" class="form-control">
                                            @error('data') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                                        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
                                    </div>
                                </div>

                                <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Grau</strong>
                                            <select class="form-control" wire:model="grau_id">
                                                <option>Seleccione o Grau</option>
                                                @foreach($grau as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('grau_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Cursos :</strong>
                                            <input type="curso" wire:model="curso" class="form-control" placeholder="Nome">
                                            @error('curso') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Intake:</strong>
                                            <select class="form-control" wire:model="intake_id">
                                                <option>Seleccione o Pais</option>
                                                @foreach($intake as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('intake_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Pacote:</strong>
                                            <select class="form-control" wire:model="pacote_id">
                                                <option>Seleccione o Pacote</option>
                                                @foreach($pacote as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('pacote_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-10">
                                        <div class="form-group">
                                            <strong>Orçamento :</strong>
                                            <input type="number" wire:model="orcamento" class="form-control" placeholder="Nome">
                                            @error('orcamento') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <strong>Moeda:</strong>
                                            <select class="form-control" wire:model="moeda_id">
                                                @foreach($moeda as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('moeda_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>País de Interesse:</strong>
                                            <option>Seleccione o Pais</option>
                                            <select class="form-control" wire:model="pais_id">
                                                @foreach($pais as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('pais_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Idioma de Proficiencia</strong>
                                            <select class="form-control" wire:model="idioma_id">
                                                <option>Seleccione o Idioma</option>
                                                @foreach($idioma as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('idioma_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="ThirdStepSubmit">Next</button>
                                        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                                    </div>
                                </div>

                                <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
                                    <div class="col-xs-12">
                                        <div class="col-md-12">
                                            <h3> Step 3</h3>

                                            <table class="table">
                                                <tr>
                                                    <td>Pessoa Id:</td>
                                                    <td><strong>{{$pessoa_id}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Nome do Candidato:</td>
                                                    <td><strong>{{$nome}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Sexo:</td>
                                                    <td><strong>{{$sexo_id}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Nacionalidade:</td>
                                                    <td><strong>{{$nacionalidade}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Escola:</td>
                                                    <td><strong>{{$escola}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Término:</td>
                                                    <td><strong>{{$termino}}</strong></td>
                                                </tr>
                                            </table>

                                            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
                                    <!-- @if($showData == true) -->
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h3> @if(!empty($successMessage))
                                                    <div class="alert alert-success">
                                                        {{ $successMessage }}
                                                    </div>
                                                    @endif
                                                </h3>

                                                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                                                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- @endif -->
                                </div>
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
                                <li><a href="{{ url('candidatos') }}">Dados Pessoais</a></li>
                                <li><a href="{{ url('academicas') }}">Dados Académicas</a></li>
                                <li><a href="{{ url('superiors') }}">Dados Superiores</a></li>
                                <li><a href="{{ url('anexos') }}">Anexos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr>
            </div>
        </div>
        <!-- Blog End -->
    </div>
</div>