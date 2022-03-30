<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Movimento:</strong>
        <select class="form-control" wire:model="movimento_id">
            <option>Seleccione o movimento</option>
            @foreach($movimento as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('movimento_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Descrição:</strong>
        <input type="text" wire:model="descricao" class="form-control" placeholder="Deposito de Application">
        @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Valor:</strong>
        <input type="number" wire:model="valor" class="form-control" placeholder="10.000,00">
        @error('valor') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" wire:click.prevent="storeConta()" class="btn btn-primary">Adicionar</button>
</div>