<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Nome:</strong>
        <input type="text" wire:model="nome" class="form-control" placeholder="Nome">
        @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Descrição:</strong>
        <input type="text" wire:model="descricao" class="form-control" placeholder="Bolsas Completas e Parciais para Índia">
        @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Icon:</strong>
        <input type="file" wire:model="icon" class="form-control" placeholder="image">
        @if($icon)
        <img src="{{$icon->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
        @endif
        @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" wire:click.prevent="storePoste()" class="btn btn-primary">Adicionar</button>
</div>