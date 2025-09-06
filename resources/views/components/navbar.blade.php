<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('app') }}">
        <div class="sidebar-brand-text mx-2">Chordhub</div>
        <div class="rotate-n-50">
            <i class="fas fa-music"></i>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    {{-- APP VIEWS/DASHBOARD --}}
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('chordhub') ? 'active' : '' }}">
        <a class="nav-link" href="/chordhub">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('chordhub/news') ? 'active' : '' }}">
        <a class="nav-link" href="/chordhub">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Últimas novedades</span></a>
    </li>
    <li class="nav-item {{ request()->is('chatbot') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('chatbot.index') }}">
            <i class="fas fa-fw fa-robot"></i>
            <span>Chatbot</span></a>
    </li>

    <!-- Divider -->
    {{-- ADMIN VIEWS --}}
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        ADMIN
    </div>

    <!-- Nav Item - Charts -->
    <li
        class="nav-item {{ request()->is('admin/usuarios') || request()->is('buscador/usuarios*') || request()->is('admin/usuarios/*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Control de Usuarios</span></a>
    </li>

    @can('songs.create')
        <!-- Nav Item - Charts -->
        <li class="nav-item {{ request()->is('admin/generos') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.genre') }}">
                <i class="fas fa-fw fa-archive"></i>
                <span>Control de Géneros</span></a>
        </li>
    @endcan
    @can('songs.edit')
        <!-- Nav Item - Tables -->
        <li class="nav-item {{ request()->is('canciones/{$id}') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ route('song_modify') }}">
                <i class="fas fa-fw fa-comments"></i>
                <span>Control de Comentarios</span></a>
        </li>
    @endcan
    <!-- Nav Item - Tables -->


    <!-- Divider -->
    <hr class="sidebar-divider">
    {{-- SONG VIEWS --}}
    <!-- Heading -->
    <div class="sidebar-heading">
        Canciones
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ request()->is('canciones*') && !request()->is('canciones/create') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('canciones.index') }}">
            <i class="fas fa-fw fa-music"></i>
            <span>Canciones</span></a>
    </li>

    @can('songs.create')
        <!-- Nav Item - Charts -->
        <li class="nav-item {{ request()->is('canciones/create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('canciones.create') }}">
                <i class="fas fa-fw fa-upload"></i>
                <span>Crear Canción</span></a>
        </li>
    @endcan
    @can('songs.edit')
        <!-- Nav Item - Tables -->
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Tus canciones
        </div>
        <li class="nav-item {{ request()->is('cancion/editar') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ route('songEdits.index') }}">
                <i class="fas fa-fw fa-file"></i>
                <span>Modificar Canción</span></a>
        </li>
    @endcan
    <!-- Nav Item - Tables -->
    @can('songs.destroy')
        <li class="nav-item {{ request()->is('cancion/eliminar') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('songDelete.index') }}">
                <i class="fas fa-fw fa-trash"></i>
                <span>Eliminar Canción</span></a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- SONLIST FILE VIEWS --}}
    <div class="sidebar-heading">
        Cancioneros
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ request()->is('cancioneros*') && !request()->is('cancioneros/create') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('cancioneros.index') }}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Cancioneros</span></a>
    </li>

    <!-- Nav Item - Charts -->
    @can('songlists.create')
        <li class="nav-item {{ request()->is('cancioneros/create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('cancioneros.create') }}">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>Crear Cancionero</span></a>
        </li>
    @endcan
    <!-- Nav Item - Tables -->
    @can('songlists.edit')
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Tus cancioneros
        </div>
        <li class="nav-item {{ request()->is('cancionero/modificar') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ route('filesEdits.index') }}">
                <i class="fas fa-fw fa-hammer"></i>
                <span>Modificar Cancionero</span></a>
        </li>
    @endcan
    <!-- Nav Item - Tables -->
    @can('songlists.destroy')
        <li class="nav-item {{ request()->is('cancionero/eliminar') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('filesDelete.index') }}">
                <i class="fas fa-fw fa-trash"></i>
                <span>Eliminar Cancionero</span></a>
        </li>
    @endcan

    <!-- Divider -->
    {{-- CHORD VIEWS --}}
    @can('chords.create')
        <div class="sidebar-heading">
            Acordes
        </div>

        <li class="nav-item {{ request()->is('acordes*') && !request()->is('acordes/edit') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('acordes.index') }}">
                <i class="fas fa-fw fa-music"></i>
                <span>Editar Acordes</span></a>
        </li>
    @endcan

    @can('chords.destroy')
        <li class="nav-item {{ request()->is('chordhub/acordes/eliminar') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('chords_delete') }}">
                <i class="fas fa-fw fa-trash"></i>
                <span>Eliminar Acordes</span></a>
        </li>
    @endcan
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Divider -->

    <!-- End of Sidebar -->


    <!-- Divider -->

    {{-- FORUM VIEWS UNFINISHED --}}
    {{-- <div class="sidebar-heading">
        Foro
    </div>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Principal</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}

</ul>
<!-- End of Sidebar -->
