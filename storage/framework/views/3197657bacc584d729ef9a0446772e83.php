<?php $__env->startSection('content'); ?>
<style>

  
.chord {
            position    : absolute;
            top         : -20px;
            width       : 0;
            font-style  : italic;
            font-weight : bold;
}

/* Para que las palabras y los acordes se posicionen correctamente */
.span-wrapper {
  position: relative;
  display: inline-block;
  line-height: 1.5em; /* Ajusta la altura de línea si es necesario */
}
</style>







<div class="row">
    <input type="text" id="songjson" value="<?php echo e($song->structure_chords != null ? $song->structure_chords : $song->structure); ?>" class="d-none">
    <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
        <div class="d-flex ms-5 my-3 gap-2">
            <a href="<?php echo e(route('chords')); ?>"><button class="mt-1 btn btn-primary"><i
                        class="fas fa-arrow-left"></i></button></a>
            <h1 class="" id="elementoReferencia"><?php echo e($song->name); ?></h1>
        </div>
    </div>
    <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
        <div class="d-flex my-3">
            <h6 class="me-1 mt-2">Subido por: <?php echo e($user->name); ?> </h6> <img class="img-profile rounded-circle" width="32" height="32" src="<?php echo e($user->pfp); ?>"></img>
        </div>
    </div>

</div>
<h3 class="text-center">Añade los Acordes</h3>
<h6 class="text-center">Haz click en la posición en la que quieras añadir el acorde</h6>
<div class="d-flex justify-content-center">
    <form id="songform" action="<?php echo e(route('chord_create_validate')); ?>">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
    <div data-mdb-input-init class="form-outline col-xl-5 col-md-10 col-10 col-sm-10">
         <input type="text" value="<?php echo e($song->id); ?>" class="d-none" name="song_id" >
         
        <input type="text" class="d-none" name="song_structure" id="valueofstructure">
        <textarea spellcheck="false" class="  bg-light small" id="area" rows="10">
    </textarea>

    </div>


 </div>

<div class="d-flex justify-content-center mt-4 gap-3">
    <button id="addchord" type="button" class="btn btn-primary">Añadir acorde</button>
    
    
    
    <select id="chords" placeholder="Selecciona un acorde">
        <option value="">Selecciona un acorde</option>
        <!-- Acordes mayores -->
        <option value="[C]">C</option>
        <option value="[C#]">C#</option>
        <option value="[D]">D</option>
        <option value="[D#]">D#</option>
        <option value="[E]">E</option>
        <option value="[F]">F</option>
        <option value="[F#]">F#</option>
        <option value="[G]">G</option>
        <option value="[G#]">G#</option>
        <option value="[A]">A</option>
        <option value="[A#]">A#</option>
        <option value="[B]">B</option>

        <!-- Acordes menores -->
        <option value="[Cm]">Cm</option>
        <option value="[C#m]">C#m</option>
        <option value="[Dm]">Dm</option>
        <option value="[D#m]">D#m</option>
        <option value="[Em]">Em</option>
        <option value="[Fm]">Fm</option>
        <option value="[F#m]">F#m</option>
        <option value="[Gm]">Gm</option>
        <option value="[G#m]">G#m</option>
        <option value="[Am]">Am</option>
        <option value="[A#m]">A#m</option>
        <option value="[Bm]">Bm</option>
    </select> 
</div>


<h2 class="text-center mt-5 ">Previsualización</h2>
<div class="d-flex justify-content-center">
    <div spellcheck="false" class="col-xl-5 col-md-10 col-10 structure" id="structure">
    
    </div>

</div>
<div class="d-flex justify-content-center">
<input type="submit" class="btn btn-primary" value="Subir acordes">
</div>
    
    </form>

<script type="module" src="<?php echo e(asset('js/Chord/ChordPreview.js')); ?>"></script>
<script type="module" src="<?php echo e(asset('js/Chord/ChordCreate.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/chord/edit.blade.php ENDPATH**/ ?>