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
        <select class="form-control" wire:model="paiss_id">
            <option>Seleccione o Pais</option>
            @foreach($pais as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('paiss_id') <span class="text-danger">{{ $message }}</span> @enderror
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
            <label><input type="checkbox" value="{{ $s->id }}" wire:model="idiomas_id.{{ $s->id }}">{{ $s->nome }}</label>
        </div>
        @endforeach
        @error('idiomas_id') <span class="text-danger">{{ $message }}</span> @enderror
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
    <button class="btn btn-primary nextBtn btn-lg pull-right ml-20" type="button" wire:click="secondStepSubmit">Próximo</button>
    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Voltar</button>
</div>