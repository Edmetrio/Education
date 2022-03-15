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
                            <h2 class="text-center">Dados Acadêmicos</h2>
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
                            <hr>
                            <form>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Grau de Ensino:</strong>
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
                                            <strong>Curso :</strong>
                                            <input type="text" wire:model="curso" class="form-control" placeholder="Trichardt School for Christian Education">
                                            @error('curso') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Ano de Entrada:</strong>
                                            <select class="form-control" wire:model="intake_id">
                                                <option>Seleccione o ano de entrada</option>
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
                                            <input type="text" wire:model="orcamento" class="form-control" placeholder="7000">
                                            @error('orcamento') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-2 mt-20">
                                        <div class="form-group">
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
                                            <strong>Países de Interesse:</strong>
                                            <select class="form-control" wire:model="pais_id">
                                                <option>Seleccione o País</option>
                                                @foreach($pais as $s)
                                                <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                                @endforeach
                                            </select>
                                            @error('pais_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Idioma que deseja estudar:</strong>
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
                                        <button type="submit" wire:click.prevent="store()" class="btn btn-primary">Adicionar</button>
                                    </div>
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

    </div>
</div>