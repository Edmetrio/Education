<div class="col-xs-12 col-sm-12 col-md-12">
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
<div class="col-xs-12 col-sm-1 col-md-1 mt-12">
    <div class="form-group">
        <strong>.</strong>
        <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})" style="margin-bottom: 20%;">+</button>
    </div>
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
    <div class="form-group">
        <strong>.</strong>
        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">-</button>
    </div>
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
<div class="col-xs-12 col-sm-12 col-md-12" style="color: #51BF45;">
    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button">Próximo</button>
</div>