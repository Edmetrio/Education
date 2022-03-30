<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Candidato:</strong>
        <select class="form-control" wire:model="edit_pessoa_id">
            <option>Seleccione o Candidato</option>
            @foreach($pessoa as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('edit_pessoa_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Nome:</strong>
        <input type="text" wire:model="edit_nome" class="form-control" placeholder="Name">
        @error('edit_nome') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Descrição:</strong>
        <textarea class="form-control" style="height:100px" wire:model="edit_descricao" placeholder="Detail"></textarea>
        @error('edit_descricao') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Situação:</strong>
        <select class="form-control" wire:model="edit_situacao_id">
            <option>Seleccione a Situação</option>
            @foreach($situacao as $s)
            <option value="{{ $s->id }}">{{ $s->nome }}</option>
            @endforeach
        </select>
        @error('edit_situacao_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
        <strong>Icon:</strong>
        <input type="file" wire:model="new_anexo" class="form-control" placeholder="image">
        @if($new_anexo)
        <img src="{{$new_anexo->temporaryUrl()}}" style="width: 15%; text-align: center;" alt="" />
        @else
        <img src="{{ asset('storage')}}/{{$old_anexo}}" style="width: 15%; text-align: center;" alt="" />
        @endif
        <input type="hidden" wire:model='old_anexo'>
        @error('new_anexo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" wire:click.prevent="updateProcesso('{{$edit_id}}')" class="btn btn-primary">Alterar</button>
</div>