<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Candidato:</strong>
        <select class="form-control" wire:model="pessoa_id">
            <option>Seleccione o Candidato</option>
            @foreach($pessoa as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('pessoa_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Nome:</strong>
        <input type="text" wire:model="nome" class="form-control" placeholder="Name">
        @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Descrição:</strong>
        <textarea class="form-control" style="height:100px" wire:model="descricao" placeholder="Detail"></textarea>
        @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Situação:</strong>
        <select class="form-control" wire:model="situacao_id">
            <option>Seleccione a Situação</option>
            @foreach($situacao as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('situacao_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Anexo:</strong>
        <input type="file" wire:model="anexo" class="form-control" placeholder="image">
        @if($anexo)
        <img src="{{$anexo->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
        @endif
        @error('anexo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" wire:click.prevent="storeProcesso()" class="btn btn-primary">Adicionar</button>
</div>