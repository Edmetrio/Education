<div>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Gerir Actividades</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="courses-details-area blog-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                @if($createData == false)
                <div class="col-md-8 mb-50">
                    <div class="courses-details">
                        <div class="course-details-content">
                            <h2 class="text-center">Actividades</h2>
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
                            <div class="row pb-50">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tipo:</strong>
                                        <select class="form-control" wire:model="selectedTipo">
                                            <option>Seleccione o Tipo</option>
                                            @foreach($tipo as $s)
                                            <option value="{{ $s->id }}">{{ $s->nome }}</option>
                                            @endforeach
                                        </select>
                                        @error('tipo_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                @if($contaData == true)
                                @if($updateModeConta)
                                    @include('livewire.actividadeContaUpdate')
                                @else
                                    @include('livewire.actividadeContaCreate')
                                    @include('livewire.actividadeConta')
                                @endif

                                @elseif($processoData == true)
                                @if($updateModeProcesso)
                                    @include('livewire.actividadeProcessoUpdate')
                                @else
                                    @include('livewire.actividadeProcessoCreate')
                                    @include('livewire.actividadeProcesso')
                                @endif

                                @elseif($posteData)
                                @if($updateMode)
                                    @include('livewire.actividadePosteUpdate')
                                @else
                                    @include('livewire.actividadePosteCreate')
                                    @include('livewire.actividadePoste')
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <hr>
            </div>
        </div>
        <!-- Blog End -->
    </div>
</div>