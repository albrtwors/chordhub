
<ul style="overflow:scroll; position:fixed; z-index:300; max-height:100vh; overflow-x:hidden;"
    class="navbar-nav bg-gradient-primary   sidebar sidebar-dark accordion" id="accordionSidebar">
    <nav>
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('app')); ?>">
            <div class="sidebar-brand-text mx-2">Chordhub</div>
            <div class="rotate-n-50">
                <i class="fas fa-music"></i>
            </div>
        </a>



        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Dashboard','isActive' => ''.e(request()->is('chordhub')).'','icon' => 'tachometer-alt','route' => ''.e(route('app')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Novedades','isActive' => ''.e(request()->is('novedades')).'','icon' => 'newspaper','route' => ''.e(route('news.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>


        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.access')): ?>
            <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'ADMIN'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.usersIndex')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Usuarios','isActive' => ''.e(request()->is('admin/usuarios')).'','icon' => 'user','route' => ''.e(route('admin.users')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.genresIndex')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Géneros','isActive' => ''.e(request()->is('admin/generos')).'','icon' => 'archive','route' => ''.e(route('admin.genre')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.commentsIndex')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Comentarios','isActive' => ''.e(request()->is('admin/comentarios')).'','icon' => 'archive','route' => ''.e(route('admin.comments')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.index')): ?>
            <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'Canciones'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.index')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Ver Canciones','isActive' => ''.e(request()->is('canciones') || (request()->is('canciones/*') && !request()->is('canciones/create') && !request()->is('canciones/*/edit'))).'','icon' => 'music','route' => ''.e(route('canciones.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.create')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Crear Canción','isActive' => ''.e(request()->is('canciones/create')).'','icon' => 'plus','route' => ''.e(route('canciones.create')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.edit')): ?>
                <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'Tus Canciones'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Modificar Canción','isActive' => ''.e(request()->is('canciones/*/edit') || request()->is('cancion/editar')).'','icon' => 'wrench','route' => ''.e(route('songEdits.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.destroy')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Eliminar Canción','isActive' => ''.e(request()->is('cancion/eliminar')).'','icon' => 'trash','route' => ''.e(route('songDelete.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>

        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'CANCIONEROS'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.index')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'clipboard-list','isActive' => ''.e((request()->is('cancioneros*') && !request()->is('cancioneros/create') && !request()->is('cancioneros/*/edit')) || request()->is('cancionero/*/cancion/*') ? 'active' : '').'','text' => 'Ver Cancioneros','route' => ''.e(route('cancioneros.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.create')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'folder-open','isActive' => ''.e(request()->is('cancioneros/create') ? 'active' : '').'','text' => 'Crear Cancionero','route' => ''.e(route('cancioneros.create')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.edit')): ?>
                <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'TUS CANCIONEROS'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'hammer','isActive' => ''.e(request()->is('cancionero/modificar') || request()->is('cancioneros/*/edit') ? 'active' : '').'','text' => 'Modificar Cancionero','route' => ''.e(route('filesEdits.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.destroy')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'trash','isActive' => ''.e(request()->is('cancionero/eliminar') ? 'active' : '').'','text' => 'Eliminar Cancionero','route' => ''.e(route('filesDelete.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'ACORDES'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.index')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'guitar','isActive' => ''.e(request()->is('acordes*') && !request()->is('acordes/create') && !request()->is('acordes/*/edit') ? 'active' : '').'','text' => 'Ver Acordes','route' => ''.e(route('acordes.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.create')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'wrench','isActive' => ''.e(request()->is('acorde/crear*') ? 'active' : '').'','text' => 'Crear Acordes','route' => ''.e(route('chordsCreateIndex')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.edit')): ?>
                <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'TUS ACORDES'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'hammer','isActive' => ''.e(request()->is('acorde/edit*') || request()->is('acordes/*/edit') || request()->is('acorde/*/edit') ? 'active' : '').'','text' => 'Modificar Acordes','route' => ''.e(route('chordsEdit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.destroy')): ?>
                <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'trash','isActive' => ''.e(request()->is('acorde/delete') || request()->is('acorde/*/delete') ? 'active' : '').'','text' => 'Eliminar Acordes','route' => ''.e(route('chordsDelete')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </nav>


</ul>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('app')); ?>">
        <div class="sidebar-brand-text mx-2">Chordhub</div>
        <div class="rotate-n-50">
            <i class="fas fa-music"></i>
        </div>
    </a>



    <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Dashboard','isActive' => ''.e(request()->is('chordhub')).'','icon' => 'tachometer-alt','route' => ''.e(route('app')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Novedades','isActive' => ''.e(request()->is('novedades')).'','icon' => 'newspaper','route' => ''.e(route('news.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>


    <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.access')): ?>
        <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'ADMIN'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.usersIndex')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Usuarios','isActive' => ''.e(request()->is('admin/usuarios')).'','icon' => 'user','route' => ''.e(route('admin.users')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.genresIndex')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Géneros','isActive' => ''.e(request()->is('admin/generos')).'','icon' => 'archive','route' => ''.e(route('admin.genre')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.commentsIndex')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Comentarios','isActive' => ''.e(request()->is('admin/comentarios')).'','icon' => 'archive','route' => ''.e(route('admin.comments')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.index')): ?>
        <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'Canciones'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.index')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Ver Canciones','isActive' => ''.e(request()->is('canciones') || (request()->is('canciones/*') && !request()->is('canciones/create') && !request()->is('canciones/*/edit'))).'','icon' => 'music','route' => ''.e(route('canciones.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.create')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Crear Canción','isActive' => ''.e(request()->is('canciones/create')).'','icon' => 'plus','route' => ''.e(route('canciones.create')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.edit')): ?>
            <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'Tus Canciones'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Modificar Canción','isActive' => ''.e(request()->is('canciones/*/edit') || request()->is('cancion/editar')).'','icon' => 'wrench','route' => ''.e(route('songEdits.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.destroy')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['text' => 'Eliminar Canción','isActive' => ''.e(request()->is('cancion/eliminar')).'','icon' => 'trash','route' => ''.e(route('songDelete.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'CANCIONEROS'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.index')): ?>
        <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'clipboard-list','isActive' => ''.e((request()->is('cancioneros*') && !request()->is('cancioneros/create') && !request()->is('cancioneros/*/edit')) || request()->is('cancionero/*/cancion/*') ? 'active' : '').'','text' => 'Ver Cancioneros','route' => ''.e(route('cancioneros.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.create')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'folder-open','isActive' => ''.e(request()->is('cancioneros/create') ? 'active' : '').'','text' => 'Crear Cancionero','route' => ''.e(route('cancioneros.create')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.edit')): ?>
            <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'TUS CANCIONEROS'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'hammer','isActive' => ''.e(request()->is('cancionero/modificar') || request()->is('cancioneros/*/edit') ? 'active' : '').'','text' => 'Modificar Cancionero','route' => ''.e(route('filesEdits.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.destroy')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'trash','isActive' => ''.e(request()->is('cancionero/eliminar') ? 'active' : '').'','text' => 'Eliminar Cancionero','route' => ''.e(route('filesDelete.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'ACORDES'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.index')): ?>
        <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'guitar','isActive' => ''.e(request()->is('acordes*') && !request()->is('acordes/create') && !request()->is('acordes/*/edit') ? 'active' : '').'','text' => 'Ver Acordes','route' => ''.e(route('acordes.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.create')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'wrench','isActive' => ''.e(request()->is('acorde/crear*') ? 'active' : '').'','text' => 'Crear Acordes','route' => ''.e(route('chordsCreateIndex')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal049a3f61ed04f7885d028e73d9e76557 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal049a3f61ed04f7885d028e73d9e76557 = $attributes; } ?>
<?php $component = App\View\Components\App\NavDivider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavDivider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $attributes = $__attributesOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__attributesOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal049a3f61ed04f7885d028e73d9e76557)): ?>
<?php $component = $__componentOriginal049a3f61ed04f7885d028e73d9e76557; ?>
<?php unset($__componentOriginal049a3f61ed04f7885d028e73d9e76557); ?>
<?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.edit')): ?>
            <?php if (isset($component)) { $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea = $attributes; } ?>
<?php $component = App\View\Components\App\NavHeader::resolve(['name' => 'TUS ACORDES'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavHeader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $attributes = $__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__attributesOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea)): ?>
<?php $component = $__componentOriginalffb2fc923ad3a85b8bd76611bb886aea; ?>
<?php unset($__componentOriginalffb2fc923ad3a85b8bd76611bb886aea); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'hammer','isActive' => ''.e(request()->is('acorde/edit*') || request()->is('acordes/*/edit') || request()->is('acorde/*/edit') ? 'active' : '').'','text' => 'Modificar Acordes','route' => ''.e(route('chordsEdit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.destroy')): ?>
            <?php if (isset($component)) { $__componentOriginal90c05447aa9f9c6d33fe0349f167283d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d = $attributes; } ?>
<?php $component = App\View\Components\App\NavItem::resolve(['icon' => 'trash','isActive' => ''.e(request()->is('acorde/delete') || request()->is('acorde/*/delete') ? 'active' : '').'','text' => 'Eliminar Acordes','route' => ''.e(route('chordsDelete')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app.nav-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App\NavItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $attributes = $__attributesOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__attributesOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d)): ?>
<?php $component = $__componentOriginal90c05447aa9f9c6d33fe0349f167283d; ?>
<?php unset($__componentOriginal90c05447aa9f9c6d33fe0349f167283d); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    </nav>
</ul>
<!-- End of Sidebar -->
<?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/components/navbar.blade.php ENDPATH**/ ?>