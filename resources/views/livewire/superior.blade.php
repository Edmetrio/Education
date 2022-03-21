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
        <textarea style="height:150px" wire:model="curso" class="form-control" placeholder="Nome"></textarea>
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
        <select class="form-control" wire:model="pais_id.0">
            @foreach($pais as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('pais_id.0') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

</div>
<div class="col-md-2">
<div class="form-group">
<strong>.</strong>
        <button class="btn text-white btn-info btn-sm" wire:click.prevent="addd({{$i}})" style="margin-bottom: 20%;">+</button>
    </div>
</div>

@foreach($put as $key => $value)
<div class="col-xs-12 col-sm-12 col-md-10">
    <div class="form-group">
        <strong>País de Interesse:</strong>
        <select class="form-control" wire:model="pais_id.{{ $value }}">
            @foreach($pais as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('pais_id.'.$value) <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-xs-12 col-sm-12 col-md-2">
        <button class="btn btn-danger btn-sm" wire:click.prevent="removee({{$key}})">-</button>
    </div>
</div>
@endforeach

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Idioma de Proficiencia</strong>
        @foreach($idioma as $s)
        <div class="checkbox">
            <label><input type="checkbox" value="{{ $s->id }}" wire:model="idioma_id.{{ $s->id }}">{{ $s->nome }}</label>
        </div>
        @endforeach
        @error('idioma_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <button class="btn btn-primary nextBtn btn-lg pull-right ml-20" type="button" wire:click="ThirdStepSubmit">Próximo</button>
    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Voltar</button>
</div>