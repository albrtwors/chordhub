<div>
    <div wire:loading.class="d-block" wire:target="selectedImage" class="d-none alert alert-primary">
        Cargando imagen
    </div>
    @if (
        $selectedImage &&
            ($selectedImage->getMimeType() == 'image/jpeg' ||
                $selectedImage->getMimeType() == 'image/png' ||
                $selectedImage->getMimeType() == 'image/gif' ||
                $selectedImage->getMimeType() == 'image/webp'))
        <div wire:loading.hide wire:target="selectedImage" class="d-flex justify-content-center my-3">
            <img width="200px" height="200px" src="{{ $selectedImage->temporaryUrl() ?? 'null' }}" alt=""
                class="rounded-circle">
        </div>
    @elseif($existingImageUrl)
        <div class="d-flex justify-content-center my-3">
            <img width="200px" height="200px" src="{{ $existingImageUrl }}" alt="" class="rounded-circle">
        </div>
    @endif
    <div class="d-flex justify-content-center gap-3">
        <input wire:model.live="selectedImage" type="file" accept="image/*" class="form-control" name="pfp"
            id="customFile">
        <button wire:click="deleteImage()" type="button" class="btn btn-danger">Borrar</button>
    </div>

</div>
