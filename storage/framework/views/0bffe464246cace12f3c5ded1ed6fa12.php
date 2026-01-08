
<ul style="overflow:scroll; position:fixed; z-index:300; max-height:100vh; overflow-x:hidden;"
    class="navbar-nav bg-gradient-primary   sidebar sidebar-dark accordion" id="accordionSidebar">
       <?php echo app('Illuminate\Foundation\Vite')->reactRefresh(); ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/react/navbar/entry.jsx'); ?>
        <div id="navbar-widget"></div>
    


</ul>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('app')); ?>">
        <div class="sidebar-brand-text mx-2">Chordhub</div>
        <div class="rotate-n-50">
            <i class="fas fa-music"></i>
        </div>
    </a>



    <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Dashboard','isActive' => ''.e(request()->is('chordhub')).'','icon' => 'tachometer-alt','route' => ''.e(route('app')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Dashboard','isActive' => ''.e(request()->is('chordhub')).'','icon' => 'tachometer-alt','route' => ''.e(route('app')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Novedades','isActive' => ''.e(request()->is('novedades')).'','icon' => 'newspaper','route' => ''.e(route('news.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Novedades','isActive' => ''.e(request()->is('novedades')).'','icon' => 'newspaper','route' => ''.e(route('news.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>


    <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.access')): ?>
        <?php if (isset($component)) { $__componentOriginal0eb85970686d0d86d1561a2744953ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb85970686d0d86d1561a2744953ae8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-header','data' => ['name' => 'ADMIN']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'ADMIN']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $attributes = $__attributesOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $component = $__componentOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__componentOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.usersIndex')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Usuarios','isActive' => ''.e(request()->is('admin/usuarios')).'','icon' => 'user','route' => ''.e(route('admin.users')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Usuarios','isActive' => ''.e(request()->is('admin/usuarios')).'','icon' => 'user','route' => ''.e(route('admin.users')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.genresIndex')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Géneros','isActive' => ''.e(request()->is('admin/generos')).'','icon' => 'archive','route' => ''.e(route('admin.genre')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Géneros','isActive' => ''.e(request()->is('admin/generos')).'','icon' => 'archive','route' => ''.e(route('admin.genre')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.commentsIndex')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Comentarios','isActive' => ''.e(request()->is('admin/comentarios')).'','icon' => 'archive','route' => ''.e(route('admin.comments')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Comentarios','isActive' => ''.e(request()->is('admin/comentarios')).'','icon' => 'archive','route' => ''.e(route('admin.comments')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.index')): ?>
        <?php if (isset($component)) { $__componentOriginal0eb85970686d0d86d1561a2744953ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb85970686d0d86d1561a2744953ae8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-header','data' => ['name' => 'Canciones']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Canciones']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $attributes = $__attributesOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $component = $__componentOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__componentOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.index')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Ver Canciones','isActive' => ''.e(request()->is('canciones') || (request()->is('canciones/*') && !request()->is('canciones/create') && !request()->is('canciones/*/edit'))).'','icon' => 'music','route' => ''.e(route('canciones.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Ver Canciones','isActive' => ''.e(request()->is('canciones') || (request()->is('canciones/*') && !request()->is('canciones/create') && !request()->is('canciones/*/edit'))).'','icon' => 'music','route' => ''.e(route('canciones.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.create')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Crear Canción','isActive' => ''.e(request()->is('canciones/create')).'','icon' => 'plus','route' => ''.e(route('canciones.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Crear Canción','isActive' => ''.e(request()->is('canciones/create')).'','icon' => 'plus','route' => ''.e(route('canciones.create')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.edit')): ?>
            <?php if (isset($component)) { $__componentOriginal0eb85970686d0d86d1561a2744953ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb85970686d0d86d1561a2744953ae8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-header','data' => ['name' => 'Tus Canciones']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'Tus Canciones']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $attributes = $__attributesOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $component = $__componentOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__componentOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Modificar Canción','isActive' => ''.e(request()->is('canciones/*/edit') || request()->is('cancion/editar')).'','icon' => 'wrench','route' => ''.e(route('songEdits.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Modificar Canción','isActive' => ''.e(request()->is('canciones/*/edit') || request()->is('cancion/editar')).'','icon' => 'wrench','route' => ''.e(route('songEdits.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.destroy')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['text' => 'Eliminar Canción','isActive' => ''.e(request()->is('cancion/eliminar')).'','icon' => 'trash','route' => ''.e(route('songDelete.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => 'Eliminar Canción','isActive' => ''.e(request()->is('cancion/eliminar')).'','icon' => 'trash','route' => ''.e(route('songDelete.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal0eb85970686d0d86d1561a2744953ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb85970686d0d86d1561a2744953ae8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-header','data' => ['name' => 'CANCIONEROS']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'CANCIONEROS']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $attributes = $__attributesOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $component = $__componentOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__componentOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.index')): ?>
        <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'clipboard-list','isActive' => ''.e((request()->is('cancioneros*') && !request()->is('cancioneros/create') && !request()->is('cancioneros/*/edit')) || request()->is('cancionero/*/cancion/*') ? 'active' : '').'','text' => 'Ver Cancioneros','route' => ''.e(route('cancioneros.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'clipboard-list','isActive' => ''.e((request()->is('cancioneros*') && !request()->is('cancioneros/create') && !request()->is('cancioneros/*/edit')) || request()->is('cancionero/*/cancion/*') ? 'active' : '').'','text' => 'Ver Cancioneros','route' => ''.e(route('cancioneros.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.create')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'folder-open','isActive' => ''.e(request()->is('cancioneros/create') ? 'active' : '').'','text' => 'Crear Cancionero','route' => ''.e(route('cancioneros.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'folder-open','isActive' => ''.e(request()->is('cancioneros/create') ? 'active' : '').'','text' => 'Crear Cancionero','route' => ''.e(route('cancioneros.create')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.edit')): ?>
            <?php if (isset($component)) { $__componentOriginal0eb85970686d0d86d1561a2744953ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb85970686d0d86d1561a2744953ae8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-header','data' => ['name' => 'TUS CANCIONEROS']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'TUS CANCIONEROS']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $attributes = $__attributesOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $component = $__componentOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__componentOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'hammer','isActive' => ''.e(request()->is('cancionero/modificar') || request()->is('cancioneros/*/edit') ? 'active' : '').'','text' => 'Modificar Cancionero','route' => ''.e(route('filesEdits.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'hammer','isActive' => ''.e(request()->is('cancionero/modificar') || request()->is('cancioneros/*/edit') ? 'active' : '').'','text' => 'Modificar Cancionero','route' => ''.e(route('filesEdits.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.destroy')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'trash','isActive' => ''.e(request()->is('cancionero/eliminar') ? 'active' : '').'','text' => 'Eliminar Cancionero','route' => ''.e(route('filesDelete.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'trash','isActive' => ''.e(request()->is('cancionero/eliminar') ? 'active' : '').'','text' => 'Eliminar Cancionero','route' => ''.e(route('filesDelete.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal0eb85970686d0d86d1561a2744953ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb85970686d0d86d1561a2744953ae8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-header','data' => ['name' => 'ACORDES']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'ACORDES']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $attributes = $__attributesOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $component = $__componentOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__componentOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.index')): ?>
        <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'guitar','isActive' => ''.e(request()->is('acordes*') && !request()->is('acordes/create') && !request()->is('acordes/*/edit') ? 'active' : '').'','text' => 'Ver Acordes','route' => ''.e(route('acordes.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'guitar','isActive' => ''.e(request()->is('acordes*') && !request()->is('acordes/create') && !request()->is('acordes/*/edit') ? 'active' : '').'','text' => 'Ver Acordes','route' => ''.e(route('acordes.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.create')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'wrench','isActive' => ''.e(request()->is('acorde/crear*') ? 'active' : '').'','text' => 'Crear Acordes','route' => ''.e(route('chordsCreateIndex')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'wrench','isActive' => ''.e(request()->is('acorde/crear*') ? 'active' : '').'','text' => 'Crear Acordes','route' => ''.e(route('chordsCreateIndex')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $attributes = $__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__attributesOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae)): ?>
<?php $component = $__componentOriginal7bde646104a2cc10851c5330a2a0e4ae; ?>
<?php unset($__componentOriginal7bde646104a2cc10851c5330a2a0e4ae); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.edit')): ?>
            <?php if (isset($component)) { $__componentOriginal0eb85970686d0d86d1561a2744953ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0eb85970686d0d86d1561a2744953ae8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-header','data' => ['name' => 'TUS ACORDES']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'TUS ACORDES']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $attributes = $__attributesOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__attributesOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0eb85970686d0d86d1561a2744953ae8)): ?>
<?php $component = $__componentOriginal0eb85970686d0d86d1561a2744953ae8; ?>
<?php unset($__componentOriginal0eb85970686d0d86d1561a2744953ae8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'hammer','isActive' => ''.e(request()->is('acorde/edit*') || request()->is('acordes/*/edit') || request()->is('acorde/*/edit') ? 'active' : '').'','text' => 'Modificar Acordes','route' => ''.e(route('chordsEdit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'hammer','isActive' => ''.e(request()->is('acorde/edit*') || request()->is('acordes/*/edit') || request()->is('acorde/*/edit') ? 'active' : '').'','text' => 'Modificar Acordes','route' => ''.e(route('chordsEdit')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.destroy')): ?>
            <?php if (isset($component)) { $__componentOriginald8684f83113385c0b2d4b694db4386f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8684f83113385c0b2d4b694db4386f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app.nav-item','data' => ['icon' => 'trash','isActive' => ''.e(request()->is('acorde/delete') || request()->is('acorde/*/delete') ? 'active' : '').'','text' => 'Eliminar Acordes','route' => ''.e(route('chordsDelete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'trash','isActive' => ''.e(request()->is('acorde/delete') || request()->is('acorde/*/delete') ? 'active' : '').'','text' => 'Eliminar Acordes','route' => ''.e(route('chordsDelete')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $attributes = $__attributesOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__attributesOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8684f83113385c0b2d4b694db4386f9)): ?>
<?php $component = $__componentOriginald8684f83113385c0b2d4b694db4386f9; ?>
<?php unset($__componentOriginald8684f83113385c0b2d4b694db4386f9); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    </nav>
</ul>
<!-- End of Sidebar -->
<?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/components/navbar.blade.php ENDPATH**/ ?>