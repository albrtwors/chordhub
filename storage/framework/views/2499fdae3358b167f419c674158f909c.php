<div>
    <?php if (isset($component)) { $__componentOriginal1334642c7f94c16deb2c06f626f62ec8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1334642c7f94c16deb2c06f626f62ec8 = $attributes; } ?>
<?php $component = App\View\Components\App\PageHeader::resolve(['text' => 'Novedades'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <div class="d-flex flex-column col-xl-6 col-md-10 col-10 col-sm-10 m-5 gap-4">
        <div class="d-flex  flex-column gap-1">

            Aquí encontrarás cada uno de los cambios importantes y actualizaciones que reciba chordhub. Cualquier
            sugerencia o bug que debas reportar, puedes enviarla al correo.

        </div>




        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 4/9/2025','title' => 'Versionado de Acordes','desc' => 'Ahora podrás crear distintas versiones de tus armonías, dichas versiones no serán modificables, a no ser de que actives la participación colaborativa'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 30/8/2025','title' => 'Creación de Acordes','desc' => 'En horabuena!, si tienes el rol músico, ahora podrás crear acordes de las canciones de nuestro repositorio. El editor visual te permitirá añadir ágilmente las armonías que tu banda necesita seguir'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 10/8/2025','title' => 'Creación de Cancioneros','desc' => 'Si tienes el rol cantante o soporte ahora puedes subir tus propios cancioneros en el repositorio. Podrás emplear un buscador con todas las canciones que tenemos disponibles actualmente!'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 27/7/2025','title' => 'Creación de Canciones','desc' => 'Si tienes el rol cantante ahora puedes subir tus propias canciones al repositorio, podrás configurar la estructura a tu gusto'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>



        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 4/9/2025','title' => 'Versionado de Acordes','desc' => 'Ahora podrás crear distintas versiones de tus armonías, dichas versiones no serán modificables, a no ser de que actives la participación colaborativa'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 30/8/2025','title' => 'Creación de Acordes','desc' => 'En horabuena!, si tienes el rol músico, ahora podrás crear acordes de las canciones de nuestro repositorio. El editor visual te permitirá añadir ágilmente las armonías que tu banda necesita seguir'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 10/8/2025','title' => 'Creación de Cancioneros','desc' => 'Si tienes el rol cantante o soporte ahora puedes subir tus propios cancioneros en el repositorio. Podrás emplear un buscador con todas las canciones que tenemos disponibles actualmente!'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695 = $attributes; } ?>
<?php $component = App\View\Components\News\NewsCard::resolve(['version' => '1.0.0 - 27/7/2025','title' => 'Creación de Canciones','desc' => 'Si tienes el rol cantante ahora puedes subir tus propias canciones al repositorio, podrás configurar la estructura a tu gusto'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('news.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\News\NewsCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $attributes = $__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__attributesOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695)): ?>
<?php $component = $__componentOriginalfbc20d729f6465aa05b3d5cb2a877695; ?>
<?php unset($__componentOriginalfbc20d729f6465aa05b3d5cb2a877695); ?>
<?php endif; ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/livewire/app/news.blade.php ENDPATH**/ ?>