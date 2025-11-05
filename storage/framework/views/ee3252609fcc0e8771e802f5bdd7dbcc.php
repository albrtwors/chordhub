<?php $__env->startSection("content"); ?>






<style>
    #structure {

        line-height: 2;
    }
</style>

<h1 class="text-start sidebar-brand-text ms-5 py-3">
    Modifica tu canción
</h1>
<h3 class="text-start ms-5 pb-3 fs-xl-1 fs-md-4 fs-4 fs-sm-4">
    Haz los cambios necesarios
</h3>

<div class="container-fluid">


<div class="row d-flex m-xl-0 m-md-5 m-5 justify-content-center">
    <div class="border-left-xl-primary col-xl-4 col-md-10 d-flex justify-content-center">
        <form action="<?php echo e(route("song_modify_validate")); ?>" id="modifyform">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>
            <input type="text" class="d-none" name="song_structure" id="valueofstructure">
            <div class="mx">
                <h5 class="mt-3 text-center">Letra</h5>
                <div class="mt-3">
                    <input type="text" value="<?php echo e($song->structure); ?>" id="songjson" class="d-none">
                    <input type="text" class="d-none" name="song_id" value="<?php echo e($song->id); ?>">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-danger my-3 me-3" id="clear">Limpiar</button>
                        <button type="button" class="btn btn-success my-3" id="clone">Duplicar</button>
                    </div>
                
                    <div data-mdb-input-init class="form-outline">
                        <textarea spellcheck="false" class="form-control   bg-light small"
                            id="area" rows="10">
Estrofa

Precoro

Coro

Puente
</textarea>

                    </div>

                    <div class="mt-3 ">
                        <button type="button" title="añade un coro" id="intro" class="btn btn-primary me-3 mt-2">Intro+</button>
                        <button type="button" title="añade un coro" id="estro" class="btn btn-primary me-3 mt-2">Estrofa+</button>
                        <button type="button" title="añade un coro" id="precor" class="btn btn-primary me-3 mt-2">PreCoro+</button>
                        <button type="button" title="añade un verso" id="coro" class=" me-3 btn btn-primary mt-2">Coro +</button>
                        <button type="button" id="puente" title="puente" class="btn btn-primary me-3 mt-2">Puente +</button>
                    </div>
                    <h6 class="mt-3 text-center">Nombre de la canción</h6>

                    <div class="input-group mt-3">
                        <input type="text" value="<?php echo e($song->name); ?>" class="form-control bg-light small" name="song_name"
                            placeholder="ej: Tú fidelidad es grande" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>

                    <h6 class="mt-3 text-center">Intérpretes originales</h6>
                    <div class="mt-3">
                        <div class="input-group mt-3">
                            <input type="text" value="<?php echo e($song->author); ?>" name="song_author" class="form-control bg-light small"
                                placeholder="ej: Hillsong" aria-label="Search" aria-describedby="basic-addon2">

                        </div>
                    </div>

                    

                    <h6 class="mt-3 text-center">Género</h6>
                    <div class="mt-3 d-flex justify-content-center">
                        <select value="$<?php echo e($song->genre); ?>" name="song_genre" class="songinput form-control bg-light small">
                            <option value="Adoración">Adoración</option>
                            <option value="Corito">Corito</option>
                            <option value="Disco">Disco</option>
                            <option value="Balada">Balada</option>
                            <option value="Electrónica">Electrónica</option>
                            <option value="Reggaeton">Reggaeton</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Bossa Nova">Bossa nova</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Salsa">Salsa</option>
                            <option value="Worship">Worship</option>
                            <option value="Merengue">Merengue</option>
                        </select>
                    </div>

                   
                </div>

                <h6 class="mt-3 text-center">Palabras clave</h6>
                <div class="mt-3 d-flex justify-content-center">
                    <input class="songinput" value="<?php echo e($song->keywords); ?>" type="text" name="song_keywords" id="">
                </div>

                <div class="mt-3">
                    <label for="collab">Participación Colaborativa</label>
                    <input type="checkbox" name="song_collab" id="">
                </div>

            </div>
    </div>
    <div class="col-xl-6 col-md-10 d-flex justify-content-center mt-md-5 mt-5 mt-xl-3">
        <div class="">
            <h5 class="text-center">Previsualización</h5>
            <div id="structure" class="m-3 text-center songletterbox">

            </div>

        </div>
    </div>
</div>
</div>
<div
    class=" container-fluid justify-content-xl-around justify-content-md-center d-flex flex-md-column flex-sm-column flex-column flex-xl-row">

</div>

<div class="container-fluid d-flex justify-content-center my-4">
    <h6 class="text-center col-5">
        La canción únicamente podrá ser modificada o eliminada por ti, a menos de que habilites la participación
        colaborativa
    </h6>
</div>
<div class="container-fluid d-flex justify-content-center my-3">
    <div>
        <input class="btn btn-primary" id="sub" type="submit" value="Actualizar">

    </div>

</div>
</form>


<script type="module" src="<?php echo e(asset("js/Song/SongPrevModify.js")); ?>"></script>
<script type="module" src="<?php echo e(asset("js/Song/SongModify.js")); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Chordhub\resources\views/modules/Song/modify_song.blade.php ENDPATH**/ ?>