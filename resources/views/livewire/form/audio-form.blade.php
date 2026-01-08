<div>
    <div wire:loading.class="d-block" wire:target="selectedAudio" class="d-none alert alert-primary">
        Cargando imagen
    </div>
    @if (
        $selectedAudio &&
            ($selectedAudio->getMimeType() == 'audio/mp3' ||
                $selectedAudio->getMimeType() == 'audio/ogg' ))
        <div wire:loading.hide wire:target="selectedImage" class="d-flex justify-content-center my-3">
            <audio controls>
              <source src="{{$selectedAudio->temporaryUrl()}}">
            </audio>
        </div>
    @elseif($existingAudioUrl)
        <div class="d-flex justify-content-center my-3">
            <img width="200px" height="200px" src="{{ $existingAudioUrl }}" alt="" class="rounded-circle">
        </div>
    @endif
    <div class="d-flex justify-content-center gap-3">
        <input wire:model.live="selectedAudio" type="file" accept="audio/*" class="form-control" name="audio"
            id="customAudio">
        <button wire:click="deleteAudio()" type="button" class="btn btn-danger">Borrar</button>
    </div>

</div>
