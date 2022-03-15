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
                            <h2 class="text-center">Anexos</h2>
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
                                            <strong>Passaporte:</strong>
                                            <input type="file" wire:model="comprovativo" class="form-control">
                                            @error('passaporte') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Certificado:</strong>
                                            <input type="file" wire:model="certificado" class="form-control">
                                            @error('certificado') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Comprovativo:</strong>
                                            <input type="file" wire:model="comprovativo" class="form-control">
                                            @error('comprovativo') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Outros Documentos:</strong>
                                            <input type="file" wire:model="outros" class="form-control">
                                            @error('outros') <span class="text-danger">{{ $message }}</span> @enderror
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
        <!-- Blog End -->
    </div>
</div>