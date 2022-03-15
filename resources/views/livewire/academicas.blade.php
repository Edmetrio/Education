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