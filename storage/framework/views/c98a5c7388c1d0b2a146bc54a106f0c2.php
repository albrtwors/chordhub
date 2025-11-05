<link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/winbox.min.css')); ?>">
<!-- Themes -->
<link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/themes/white.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/themes/white.min.css')); ?>">

<script src="<?php echo e(asset('templates/draggable/js/winbox.min.js')); ?>"></script>
<?php $__env->startSection('content'); ?>
    <style>
        #structure {

            line-height: 2;
            width: 70vw;
            max-height: 700px;
            overflow-y: scroll;
        }

        .chord {
            position: absolute;
            top: -20px;
            width: 0;
            font-style: italic;
            font-weight: bold;
        }

        .chord.chord-small {
            font-size: 0.7em;
            letter-spacing: 0.05px;
        }

        /* Para que las palabras y los acordes se posicionen correctamente */
        .span-wrapper {
            position: relative;
            display: inline-block;
            line-height: 1.5em;
            /* Ajusta la altura de línea si es necesario */
        }
    </style>







    <div class="row">
        <input type="text" id="songjson" value="<?php echo e($chord->structure); ?>" class="d-none">
        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">

                <h1 class="fw-bold" id="elementoReferencia"><?php echo e($song->name); ?></h1>
            </div>


        </div>


        <div class="d-flex flex-column align-items-end col-xl-5">



            <div class="d-flex my-3">
                <h5 class="me-1 mt-2">Canción subida por: <b><?php echo e($user->roles->first()->name); ?></b> <?php echo e($user->name); ?>

                </h5>

                <img class="img-profile rounded-circle" width="32" height="32"
                    src="<?php echo e($user->image->url ?? 'https://cdn-icons-png.flaticon.com/512/3809/3809073.png'); ?>"></img>
            </div>


        </div>



    </div>



    <div class="row m-5">
        <div class="col-xl-6">
            <form id="delform" class="d-flex justify-content-center" action="<?php echo e(route('acordes.destroy', $chord->id)); ?>">
                <button type="submit" class="btn btn-danger mb-3">
                    Eliminar acordes <i class="fas fa-trash"></i>
                </button>
            </form>
            <h5 class="text-center fw-bold">Añade los Acordes</h5>
            <h5 class="text-center">Haz click en la posición en la que quieras añadir el acorde</h5>
            <div class="d-flex justify-content-center">
                <form id="songform" action="<?php echo e(route('acordes.update', $chord->id)); ?>">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div data-mdb-input-init class="form-outline col-xl-5 col-md-10 col-10 col-sm-10">
                        <input type="text" value="<?php echo e($song->id); ?>" class="d-none" name="song_id">

                        <input type="text" class="d-none" name="song_structure" id="valueofstructure">


                    </div>
                    <textarea spellcheck="false" class="form-control bg-light" id="area" rows="10">
    </textarea>


            </div>


            <div class="d-flex justify-content-center mt-4 gap-3">
                <button id="addchord" type="button" class="btn btn-primary">Añadir acorde</button>



                <select id="chords" class="bg-light form-control col-2" placeholder="Selecciona un acorde">
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

            <div class="d-flex mt-4 justify-content-center align-items-center flex-column">

                <h5 class="fw-bold">Nombre de la Versión</h5>
                <div class="d-flex justify-content-center mb-3">
                    <input type="text" value="<?php echo e($chord->name); ?>" class="form-control" name="name">
                </div>

                <h5 class="fw-bold  ">Participación Colaborativa</h5>
                <input type="checkbox" <?php if($chord): ?> <?php echo e($chord->collab ? 'checked' : ''); ?> <?php endif; ?>
                    name="collab" value="1" id="">
            </div>


            <div class="d-flex justify-content-center my-3">
                <input type="submit" class="btn btn-primary" value="Subir acordes">
            </div>

            </form>
        </div>
        <div class="col-xl-6">
            <h5 class="text-center mt-4 fw-bold">Previsualización</h5>
            <div class="" id="structure">


            </div>
        </div>
        <div id="editMenu" class="d-none"></div>

        <div id="chordEditArea"class="m-3 d-flex gap-2">
            <textarea spellcheck="false" name="" id="chordArea" cols="30" rows="10" class="form-control"></textarea>
            <div class="d-flex flex-column gap-2 justify-content-center">

                <label class="text-center fw-bold">
                    Añade múltiples acordes
                </label>
                <div class="d-flex gap-2 justify-content-center">
                    <div>
                        <button class="btn btn-primary" id="multipleSelButton">Activar</button>
                    </div>
                    <div>
                        <button class="btn btn-success" id="addMultiple">Añadir</button>
                    </div>

                </div>
                <div class="">

                    <?php if (isset($component)) { $__componentOriginal67cd5dc9866c6185ad92d933c387fa86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Select::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'chordSelectEditArea']); ?>
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
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $attributes = $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $component = $__componentOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>

                </div>
                <label for="" class="text-center fw-bold d-none">Añadido inteligente</label>
                <label for="" class="text-center d-none">Escribe el acorde, automáticamente se añadirá a
                    la lista de
                    posiciones</label>
                <div class="d-flex gap-2 align-items-center d-none">
                    <input id="intChordInput" type="text" class="form-control"><label id="posChordLabel"
                        for="">Posiciones: </label>
                </div>




            </div>
        </div>
        <script>
            new WinBox(`Editor`, {

                min: true,
                mount: document.getElementById('chordEditArea')

            });
        </script>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="module" src="<?php echo e(asset('js/Chord/ChordPreview.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Chord/ChordUpdate.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Chord/ChordDelete.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/modules/Chord/edit.blade.php ENDPATH**/ ?>