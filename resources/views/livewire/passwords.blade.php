<div>
    <form>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Palavra-Passe:</strong>
                    <input type="password" wire:model="password" class="form-control" p>
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirmar Palavra-Passe:</strong>
                    <input type="password" wire:model="confpassword" class="form-control" >
                    @error('confpassword') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" wire:click.prevent="updatePassword()" class="btn btn-primary">Alterar</button>
            </div>
        </div>
    </form>
</div>