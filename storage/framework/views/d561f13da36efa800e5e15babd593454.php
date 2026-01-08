<div>
    <div wire:loading.class="d-block" wire:target="selectedAudio" class="d-none alert alert-primary">
        Cargando imagen
    </div>
    <!--[if BLOCK]><![endif]--><?php if(
        $selectedAudio &&
            ($selectedAudio->getMimeType() == 'audio/mp3' ||
                $selectedAudio->getMimeType() == 'audio/ogg' )): ?>
        <div wire:loading.hide wire:target="selectedImage" class="d-flex justify-content-center my-3">
            <audio controls>
              <source src="<?php echo e($selectedAudio->temporaryUrl()); ?>">
            </audio>
        </div>
    <?php elseif($existingAudioUrl): ?>
        <div class="d-flex justify-content-center my-3">
            <img width="200px" height="200px" src="<?php echo e($existingAudioUrl); ?>" alt="" class="rounded-circle">
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="d-flex justify-content-center gap-3">
        <input wire:model.live="selectedAudio" type="file" accept="audio/*" class="form-control" name="audio"
            id="customAudio">
        <button wire:click="deleteAudio()" type="button" class="btn btn-danger">Borrar</button>
    </div>

</div>
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/livewire/form/audio-form.blade.php ENDPATH**/ ?>