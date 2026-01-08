<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/winbox.min.css')); ?>">
    <!-- Themes -->
    <link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/themes/white.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('templates/draggable/css/themes/white.min.css')); ?>">

    <script src="<?php echo e(asset('templates/draggable/js/winbox.min.js')); ?>"></script>
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

        .span-wrapper {
            position: relative;
            display: inline-block;
            line-height: 1.5em;

        }
    </style>

    <span id="clickHint" class="d-none"
        style="padding:2; z-index:30; width:20px; height:20px; background:rgba(0, 115, 255, 0.421); border-radius:100%"></span>

    <div class="row">
        <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['value' => ''.e($song->structure).'','id' => 'songjson','class' => 'd-none']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($song->structure).'','id' => 'songjson','class' => 'd-none']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>

        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">
                <?php if (isset($component)) { $__componentOriginalc01e675e2b4dacacb174b950e792179c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc01e675e2b4dacacb174b950e792179c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.page-header','data' => ['text' => ''.e($song->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => ''.e($song->name).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc01e675e2b4dacacb174b950e792179c)): ?>
<?php $attributes = $__attributesOriginalc01e675e2b4dacacb174b950e792179c; ?>
<?php unset($__attributesOriginalc01e675e2b4dacacb174b950e792179c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc01e675e2b4dacacb174b950e792179c)): ?>
<?php $component = $__componentOriginalc01e675e2b4dacacb174b950e792179c; ?>
<?php unset($__componentOriginalc01e675e2b4dacacb174b950e792179c); ?>
<?php endif; ?>

            </div>


        </div>

    </div>



    <div class="row m-5">
        <div class="col-xl-6 d-flex flex-column align-items-center">


            <?php if (isset($component)) { $__componentOriginal1f715251ca27813040dd69c48bb81eec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f715251ca27813040dd69c48bb81eec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.label','data' => ['text' => 'Añade los acordes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Añade los acordes']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $attributes = $__attributesOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__attributesOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $component = $__componentOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__componentOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
            <p class="text-center">Haz click en la posición en la que quieras añadir el acorde</p>
            <div class="d-flex justify-content-center">
                <form id="songform" action="<?php echo e(route('acordes.store')); ?>">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div data-mdb-input-init class="form-outline col-xl-5 col-md-10 col-10 col-sm-10">
                        <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['class' => 'd-none','name' => 'song_id','value' => ''.e($song->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-none','name' => 'song_id','value' => ''.e($song->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['class' => 'd-none','name' => 'song_structure','id' => 'valueofstructure']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-none','name' => 'song_structure','id' => 'valueofstructure']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>



                    </div>
                    <?php if (isset($component)) { $__componentOriginal48f393a16e93b07cc0aee72785c2e330 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48f393a16e93b07cc0aee72785c2e330 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.area','data' => ['id' => 'area','type' => 'chord']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'area','type' => 'chord']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48f393a16e93b07cc0aee72785c2e330)): ?>
<?php $attributes = $__attributesOriginal48f393a16e93b07cc0aee72785c2e330; ?>
<?php unset($__attributesOriginal48f393a16e93b07cc0aee72785c2e330); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48f393a16e93b07cc0aee72785c2e330)): ?>
<?php $component = $__componentOriginal48f393a16e93b07cc0aee72785c2e330; ?>
<?php unset($__componentOriginal48f393a16e93b07cc0aee72785c2e330); ?>
<?php endif; ?>


            </div>


            <div class="d-flex justify-content-center mt-4 gap-3">
                <?php if (isset($component)) { $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.button','data' => ['id' => 'addchord','text' => 'Añadir']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'addchord','text' => 'Añadir']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $attributes = $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $component = $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>


                <?php if (isset($component)) { $__componentOriginal7041cc63efd62f0450fe4bb37aadf484 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7041cc63efd62f0450fe4bb37aadf484 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.select','data' => ['id' => 'chords']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'chords']); ?>
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
<?php if (isset($__attributesOriginal7041cc63efd62f0450fe4bb37aadf484)): ?>
<?php $attributes = $__attributesOriginal7041cc63efd62f0450fe4bb37aadf484; ?>
<?php unset($__attributesOriginal7041cc63efd62f0450fe4bb37aadf484); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7041cc63efd62f0450fe4bb37aadf484)): ?>
<?php $component = $__componentOriginal7041cc63efd62f0450fe4bb37aadf484; ?>
<?php unset($__componentOriginal7041cc63efd62f0450fe4bb37aadf484); ?>
<?php endif; ?>





            </div>

            <div class="d-flex gap-3 mt-4 justify-content-center align-items-center flex-column">


                <div class="d-flex flex-column align-items-center ">
                    <?php if (isset($component)) { $__componentOriginal1f715251ca27813040dd69c48bb81eec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f715251ca27813040dd69c48bb81eec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.label','data' => ['text' => 'Nombre']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Nombre']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $attributes = $__attributesOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__attributesOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $component = $__componentOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__componentOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['name' => 'name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>

                </div>

                <div class="d-flex flex-column align-items-center ">
                    <?php if (isset($component)) { $__componentOriginal1f715251ca27813040dd69c48bb81eec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f715251ca27813040dd69c48bb81eec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.label','data' => ['text' => 'Participación Colaborativa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Participación Colaborativa']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $attributes = $__attributesOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__attributesOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f715251ca27813040dd69c48bb81eec)): ?>
<?php $component = $__componentOriginal1f715251ca27813040dd69c48bb81eec; ?>
<?php unset($__componentOriginal1f715251ca27813040dd69c48bb81eec); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal4fb6044c7ed6b655352043ff774efcd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input','data' => ['checkbox' => true,'type' => 'checkbox','value' => '1','name' => 'collab']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['checkbox' => true,'type' => 'checkbox','value' => '1','name' => 'collab']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $attributes = $__attributesOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__attributesOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0)): ?>
<?php $component = $__componentOriginal4fb6044c7ed6b655352043ff774efcd0; ?>
<?php unset($__componentOriginal4fb6044c7ed6b655352043ff774efcd0); ?>
<?php endif; ?>

                </div>

            </div>


            <div class="d-flex justify-content-center my-3">
                <?php if (isset($component)) { $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.button','data' => ['type' => 'submit','submit' => true,'text' => 'Subir']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','submit' => true,'text' => 'Subir']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $attributes = $__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__attributesOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804)): ?>
<?php $component = $__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804; ?>
<?php unset($__componentOriginal48c3958713aa2b1d2dd1900fbfcfc804); ?>
<?php endif; ?>

            </div>

            </form>
        </div>
        <div class="col-xl-6">
            <h5 class="text-center  fw-bold">Previsualización</h5>
            <div class="" id="structure">


            </div>
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

                <?php if (isset($component)) { $__componentOriginal7041cc63efd62f0450fe4bb37aadf484 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7041cc63efd62f0450fe4bb37aadf484 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.select','data' => ['id' => 'chordSelectEditArea']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
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
<?php if (isset($__attributesOriginal7041cc63efd62f0450fe4bb37aadf484)): ?>
<?php $attributes = $__attributesOriginal7041cc63efd62f0450fe4bb37aadf484; ?>
<?php unset($__attributesOriginal7041cc63efd62f0450fe4bb37aadf484); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7041cc63efd62f0450fe4bb37aadf484)): ?>
<?php $component = $__componentOriginal7041cc63efd62f0450fe4bb37aadf484; ?>
<?php unset($__componentOriginal7041cc63efd62f0450fe4bb37aadf484); ?>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script type="module" src="<?php echo e(asset('js/Chord/ChordPreview.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Chord/ChordCreate.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/modules/Chord/create.blade.php ENDPATH**/ ?>