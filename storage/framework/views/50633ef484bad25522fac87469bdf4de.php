<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('app')); ?>">
        <div class="sidebar-brand-text mx-2">Chordhub</div>
        <div class="rotate-n-50">
            <i class="fas fa-music"></i>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo e(request()->is('chordhub') ? 'active' : ''); ?>">
        <a class="nav-link" href="/chordhub">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item <?php echo e(request()->is('chordhub/news') ? 'active' : ''); ?>">
        <a class="nav-link" href="/chordhub">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Últimas novedades</span></a>
    </li>
    <li class="nav-item <?php echo e(request()->is('chatbot') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('chatbot.index')); ?>">
            <i class="fas fa-fw fa-robot"></i>
            <span>Chatbot</span></a>
    </li>

    <!-- Divider -->
    
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        ADMIN
    </div>

    <!-- Nav Item - Charts -->
    <li
        class="nav-item <?php echo e(request()->is('admin/usuarios') || request()->is('buscador/usuarios*') || request()->is('admin/usuarios/*') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.users')); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Control de Usuarios</span></a>
    </li>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.create')): ?>
        <!-- Nav Item - Charts -->
        <li class="nav-item <?php echo e(request()->is('admin/generos') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('admin.genre')); ?>">
                <i class="fas fa-fw fa-archive"></i>
                <span>Control de Géneros</span></a>
        </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.edit')): ?>
        <!-- Nav Item - Tables -->
        <li class="nav-item <?php echo e(request()->is('canciones/{$id}') ? 'active' : ''); ?> ">
            <a class="nav-link" href="<?php echo e(route('song_modify')); ?>">
                <i class="fas fa-fw fa-comments"></i>
                <span>Control de Comentarios</span></a>
        </li>
    <?php endif; ?>
    <!-- Nav Item - Tables -->


    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Canciones
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php echo e(request()->is('canciones*') && !request()->is('canciones/create') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('canciones.index')); ?>">
            <i class="fas fa-fw fa-music"></i>
            <span>Canciones</span></a>
    </li>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.create')): ?>
        <!-- Nav Item - Charts -->
        <li class="nav-item <?php echo e(request()->is('canciones/create') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('canciones.create')); ?>">
                <i class="fas fa-fw fa-upload"></i>
                <span>Crear Canción</span></a>
        </li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.edit')): ?>
        <!-- Nav Item - Tables -->
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Tus canciones
        </div>
        <li class="nav-item <?php echo e(request()->is('cancion/editar') ? 'active' : ''); ?> ">
            <a class="nav-link" href="<?php echo e(route('songEdits.index')); ?>">
                <i class="fas fa-fw fa-file"></i>
                <span>Modificar Canción</span></a>
        </li>
    <?php endif; ?>
    <!-- Nav Item - Tables -->
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songs.destroy')): ?>
        <li class="nav-item <?php echo e(request()->is('cancion/eliminar') ? 'active' : ''); ?>">
            <a class="nav-link " href="<?php echo e(route('songDelete.index')); ?>">
                <i class="fas fa-fw fa-trash"></i>
                <span>Eliminar Canción</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    
    <div class="sidebar-heading">
        Cancioneros
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?php echo e(request()->is('cancioneros*') && !request()->is('cancioneros/create') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('cancioneros.index')); ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Cancioneros</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.create')): ?>
        <li class="nav-item <?php echo e(request()->is('cancioneros/create') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('cancioneros.create')); ?>">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>Crear Cancionero</span></a>
        </li>
    <?php endif; ?>
    <!-- Nav Item - Tables -->
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.edit')): ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Tus cancioneros
        </div>
        <li class="nav-item <?php echo e(request()->is('cancionero/modificar') ? 'active' : ''); ?> ">
            <a class="nav-link" href="<?php echo e(route('filesEdits.index')); ?>">
                <i class="fas fa-fw fa-hammer"></i>
                <span>Modificar Cancionero</span></a>
        </li>
    <?php endif; ?>
    <!-- Nav Item - Tables -->
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('songlists.destroy')): ?>
        <li class="nav-item <?php echo e(request()->is('cancionero/eliminar') ? 'active' : ''); ?>">
            <a class="nav-link " href="<?php echo e(route('filesDelete.index')); ?>">
                <i class="fas fa-fw fa-trash"></i>
                <span>Eliminar Cancionero</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.create')): ?>
        <div class="sidebar-heading">
            Acordes
        </div>

        <li class="nav-item <?php echo e(request()->is('acordes*') && !request()->is('acordes/edit') ? 'active' : ''); ?>">
            <a class="nav-link " href="<?php echo e(route('acordes.index')); ?>">
                <i class="fas fa-fw fa-music"></i>
                <span>Editar Acordes</span></a>
        </li>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chords.destroy')): ?>
        <li class="nav-item <?php echo e(request()->is('chordhub/acordes/eliminar') ? 'active' : ''); ?>">
            <a class="nav-link " href="<?php echo e(route('chords_delete')); ?>">
                <i class="fas fa-fw fa-trash"></i>
                <span>Eliminar Acordes</span></a>
        </li>
    <?php endif; ?>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Divider -->

    <!-- End of Sidebar -->


    <!-- Divider -->

    
    

</ul>
<!-- End of Sidebar -->
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/components/navbar.blade.php ENDPATH**/ ?>