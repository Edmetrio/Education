<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Cópia do Passaporte:</strong>
        <input type="file" wire:model="passaportes" class="form-control" placeholder="Nome">
        @error('passaportes') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Certificado/ Declaração de notas:</strong>
        <input type="file" wire:model="certificados" class="form-control" placeholder="Nome">
        @error('certificados') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Comprovativo de pagamento:</strong>
        <input type="file" wire:model="comprovativos" class="form-control" placeholder="Nome">
        @error('comprovativos') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Outros Documentos:</strong>
        <input type="file" wire:model="outros" class="form-control" placeholder="Nome">
        @error('outros') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <button class="btn btn-primary nextBtn btn-lg pull-right ml-20" type="button" wire:click="submitForm">Próximo</button>
    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Voltar</button>
</div>