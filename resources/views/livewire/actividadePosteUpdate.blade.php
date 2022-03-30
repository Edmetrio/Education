<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Nome:</strong>
        <input type="text" wire:model="edit_nome" class="form-control" placeholder="Nome">
        @error('edit_nome') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Descrição:</strong>
        <input type="text" wire:model="edit_descricao" class="form-control" placeholder="Bolsas Completas e Parciais para Índia">
        @error('edit_descricao') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Icon:</strong>
        <input type="file" wire:model="new_icon" class="form-control" placeholder="image">
        @if($new_icon)
        <img src="{{$new_icon->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
        @else
        <img src="{{ asset('storage')}}/{{$old_icon}}" style="width: 15%; text-align: center;" alt="" />
        @endif
        <input type="hidden" wire:model='old_icon'>
        @error('new_icon') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" wire:click.prevent="updatePoste('{{$edit_id}}')" class="btn btn-primary">Alterar</button>
</div>