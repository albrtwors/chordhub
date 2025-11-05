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
        <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($song->structure).'','id' => 'songjson','class' => 'd-none']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>

        <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
            <div class="d-flex ms-5 my-3 gap-2">
                <?php if (isset($component)) { $__componentOriginal1334642c7f94c16deb2c06f626f62ec8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1334642c7f94c16deb2c06f626f62ec8 = $attributes; } ?>
<?php $component = App\View\Components\App\PageHeader::resolve(['text' => ''.e($song->name).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\PageHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1334642c7f94c16deb2c06f626f62ec8)): ?>
<?php $attributes = $__attributesOriginal1334642c7f94c16deb2c06f626f62ec8; ?>
<?php unset($__attributesOriginal1334642c7f94c16deb2c06f626f62ec8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1334642c7f94c16deb2c06f626f62ec8)): ?>
<?php $component = $__componentOriginal1334642c7f94c16deb2c06f626f62ec8; ?>
<?php unset($__componentOriginal1334642c7f94c16deb2c06f626f62ec8); ?>
<?php endif; ?>

            </div>


        </div>

    </div>



    <div class="row m-5">
        <div class="col-xl-6 d-flex flex-column align-items-center">


            <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['text' => 'Añade los acordes'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Label::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
            <p class="text-center">Haz click en la posición en la que quieras añadir el acorde</p>
            <div class="d-flex justify-content-center">
                <form id="songform" action="<?php echo e(route('acordes.store')); ?>">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div data-mdb-input-init class="form-outline col-xl-5 col-md-10 col-10 col-sm-10">
                        <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-none','name' => 'song_id','value' => ''.e($song->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-none','name' => 'song_structure','id' => 'valueofstructure']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>



                    </div>
                    <?php if (isset($component)) { $__componentOriginala5e32f85e6479a85555275c00c153188 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5e32f85e6479a85555275c00c153188 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Area::resolve(['id' => 'area','type' => 'chord'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.area'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Area::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5e32f85e6479a85555275c00c153188)): ?>
<?php $attributes = $__attributesOriginala5e32f85e6479a85555275c00c153188; ?>
<?php unset($__attributesOriginala5e32f85e6479a85555275c00c153188); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5e32f85e6479a85555275c00c153188)): ?>
<?php $component = $__componentOriginala5e32f85e6479a85555275c00c153188; ?>
<?php unset($__componentOriginala5e32f85e6479a85555275c00c153188); ?>
<?php endif; ?>


            </div>


            <div class="d-flex justify-content-center mt-4 gap-3">
                <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039608dc70b2e4c26356f5d84408f584 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Button::resolve(['text' => 'Añadir'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'addchord']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $attributes = $__attributesOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__attributesOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>


                <?php if (isset($component)) { $__componentOriginal67cd5dc9866c6185ad92d933c387fa86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Select::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Select::ignoredParameterNames()); ?>
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
<?php if (isset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $attributes = $__attributesOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__attributesOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86)): ?>
<?php $component = $__componentOriginal67cd5dc9866c6185ad92d933c387fa86; ?>
<?php unset($__componentOriginal67cd5dc9866c6185ad92d933c387fa86); ?>
<?php endif; ?>





            </div>

            <div class="d-flex gap-3 mt-4 justify-content-center align-items-center flex-column">


                <div class="d-flex flex-column align-items-center ">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['text' => 'Nombre'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Label::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>

                </div>

                <div class="d-flex flex-column align-items-center ">
                    <?php if (isset($component)) { $__componentOriginal89b295b0763c93abe0143426334eb5d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b295b0763c93abe0143426334eb5d6 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Label::resolve(['text' => 'Participación Colaborativa'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Label::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $attributes = $__attributesOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__attributesOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b295b0763c93abe0143426334eb5d6)): ?>
<?php $component = $__componentOriginal89b295b0763c93abe0143426334eb5d6; ?>
<?php unset($__componentOriginal89b295b0763c93abe0143426334eb5d6); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['checkbox' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'checkbox','value' => '1','name' => 'collab']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>

                </div>

            </div>


            <div class="d-flex justify-content-center my-3">
                <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039608dc70b2e4c26356f5d84408f584 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Button::resolve(['submit' => true,'text' => 'Subir'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Forms\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $attributes = $__attributesOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__attributesOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script type="module" src="<?php echo e(asset('js/Chord/ChordPreview.js')); ?>"></script>
    <script type="module" src="<?php echo e(asset('js/Chord/ChordCreate.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/modules/Chord/create.blade.php ENDPATH**/ ?>