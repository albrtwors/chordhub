{{-- bg-gradient-primary --}}
<ul style="overflow:scroll; position:fixed; z-index:300; max-height:100vh; overflow-x:hidden;"
    class="navbar-nav bg-gradient-primary   sidebar sidebar-dark accordion" id="accordionSidebar">
    <nav>
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('app') }}">
            <div class="sidebar-brand-text mx-2">Chordhub</div>
            <div class="rotate-n-50">
                <i class="fas fa-music"></i>
            </div>
        </a>



        <x-app.nav-divider />

        <x-app.nav-item text="Dashboard" isActive="{{ request()->is('chordhub') }}" icon="tachometer-alt"
            route="{{ route('app') }}" />

        <x-app.nav-item text="Novedades" isActive="{{ request()->is('novedades') }}" icon="newspaper"
            route="{{ route('news.index') }}" />


        <x-app.nav-divider />
        @can('admin.access')
            <x-app.nav-header name="ADMIN" />
            @can('admin.usersIndex')
                <x-app.nav-item text="Usuarios" isActive="{{ request()->is('admin/usuarios') }}" icon="user"
                    route="{{ route('admin.users') }}" />
            @endcan

            @can('admin.genresIndex')
                <x-app.nav-item text="Géneros" isActive="{{ request()->is('admin/generos') }}" icon="archive"
                    route="{{ route('admin.genre') }}" />
            @endcan

            @can('admin.commentsIndex')
                <x-app.nav-item text="Comentarios" isActive="{{ request()->is('admin/comentarios') }}" icon="archive"
                    route="{{ route('admin.comments') }}" />
            @endcan
        @endcan

        <x-app.nav-divider />

        @can('songs.index')
            <x-app.nav-header name="Canciones" />

            @can('songs.index')
                <x-app.nav-item text="Ver Canciones"
                    isActive="{{ request()->is('canciones') || (request()->is('canciones/*') && !request()->is('canciones/create') && !request()->is('canciones/*/edit')) }}"
                    icon="music" route="{{ route('canciones.index') }}" />
            @endcan

            @can('songs.create')
                <x-app.nav-item text="Crear Canción" isActive="{{ request()->is('canciones/create') }}" icon="plus"
                    route="{{ route('canciones.create') }}" />
            @endcan
            <x-app.nav-divider />
            @can('songs.edit')
                <x-app.nav-header name="Tus Canciones" />
                <x-app.nav-item text="Modificar Canción"
                    isActive="{{ request()->is('canciones/*/edit') || request()->is('cancion/editar') }}" icon="wrench"
                    route="{{ route('songEdits.index') }}" />
            @endcan
            @can('songs.destroy')
                <x-app.nav-item text="Eliminar Canción" isActive="{{ request()->is('cancion/eliminar') }}" icon="trash"
                    route="{{ route('songDelete.index') }}" />
            @endcan

        @endcan

        <x-app.nav-divider />
        <x-app.nav-header name="CANCIONEROS" />
        @can('songlists.index')
            <x-app.nav-item icon="clipboard-list"
                isActive="{{ (request()->is('cancioneros*') && !request()->is('cancioneros/create') && !request()->is('cancioneros/*/edit')) || request()->is('cancionero/*/cancion/*') ? 'active' : '' }}"
                text="Ver Cancioneros" route="{{ route('cancioneros.index') }}" />

            @can('songlists.create')
                <x-app.nav-item icon="folder-open" isActive="{{ request()->is('cancioneros/create') ? 'active' : '' }}"
                    text="Crear Cancionero" route="{{ route('cancioneros.create') }}" />
            @endcan
            <x-app.nav-divider />
            @can('songlists.edit')
                <x-app.nav-header name="TUS CANCIONEROS" />
                <x-app.nav-item icon="hammer"
                    isActive="{{ request()->is('cancionero/modificar') || request()->is('cancioneros/*/edit') ? 'active' : '' }}"
                    text="Modificar Cancionero" route="{{ route('filesEdits.index') }}" />
            @endcan
            @can('songlists.destroy')
                <x-app.nav-item icon="trash" isActive="{{ request()->is('cancionero/eliminar') ? 'active' : '' }}"
                    text="Eliminar Cancionero" route="{{ route('filesDelete.index') }}" />
            @endcan
        @endcan

        <x-app.nav-divider />
        <x-app.nav-header name="ACORDES" />
        @can('chords.index')
            <x-app.nav-item icon="guitar"
                isActive="{{ request()->is('acordes*') && !request()->is('acordes/create') && !request()->is('acordes/*/edit') ? 'active' : '' }}"
                text="Ver Acordes" route="{{ route('acordes.index') }}" />

            @can('chords.create')
                <x-app.nav-item icon="wrench" isActive="{{ request()->is('acorde/crear*') ? 'active' : '' }}"
                    text="Crear Acordes" route="{{ route('chordsCreateIndex') }}" />
            @endcan
            <x-app.nav-divider />
            @can('chords.edit')
                <x-app.nav-header name="TUS ACORDES" />
                <x-app.nav-item icon="hammer"
                    isActive="{{ request()->is('acorde/edit*') || request()->is('acordes/*/edit') || request()->is('acorde/*/edit') ? 'active' : '' }}"
                    text="Modificar Acordes" route="{{ route('chordsEdit') }}" />
            @endcan
            @can('chords.destroy')
                <x-app.nav-item icon="trash"
                    isActive="{{ request()->is('acorde/delete') || request()->is('acorde/*/delete') ? 'active' : '' }}"
                    text="Eliminar Acordes" route="{{ route('chordsDelete') }}" />
            @endcan
        @endcan
    </nav>


</ul>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('app') }}">
        <div class="sidebar-brand-text mx-2">Chordhub</div>
        <div class="rotate-n-50">
            <i class="fas fa-music"></i>
        </div>
    </a>



    <x-app.nav-divider />

    <x-app.nav-item text="Dashboard" isActive="{{ request()->is('chordhub') }}" icon="tachometer-alt"
        route="{{ route('app') }}" />

    <x-app.nav-item text="Novedades" isActive="{{ request()->is('novedades') }}" icon="newspaper"
        route="{{ route('news.index') }}" />


    <x-app.nav-divider />
    @can('admin.access')
        <x-app.nav-header name="ADMIN" />
        @can('admin.usersIndex')
            <x-app.nav-item text="Usuarios" isActive="{{ request()->is('admin/usuarios') }}" icon="user"
                route="{{ route('admin.users') }}" />
        @endcan

        @can('admin.genresIndex')
            <x-app.nav-item text="Géneros" isActive="{{ request()->is('admin/generos') }}" icon="archive"
                route="{{ route('admin.genre') }}" />
        @endcan

        @can('admin.commentsIndex')
            <x-app.nav-item text="Comentarios" isActive="{{ request()->is('admin/comentarios') }}" icon="archive"
                route="{{ route('admin.comments') }}" />
        @endcan
    @endcan

    <x-app.nav-divider />

    @can('songs.index')
        <x-app.nav-header name="Canciones" />

        @can('songs.index')
            <x-app.nav-item text="Ver Canciones"
                isActive="{{ request()->is('canciones') || (request()->is('canciones/*') && !request()->is('canciones/create') && !request()->is('canciones/*/edit')) }}"
                icon="music" route="{{ route('canciones.index') }}" />
        @endcan

        @can('songs.create')
            <x-app.nav-item text="Crear Canción" isActive="{{ request()->is('canciones/create') }}" icon="plus"
                route="{{ route('canciones.create') }}" />
        @endcan
        <x-app.nav-divider />
        @can('songs.edit')
            <x-app.nav-header name="Tus Canciones" />
            <x-app.nav-item text="Modificar Canción"
                isActive="{{ request()->is('canciones/*/edit') || request()->is('cancion/editar') }}" icon="wrench"
                route="{{ route('songEdits.index') }}" />
        @endcan
        @can('songs.destroy')
            <x-app.nav-item text="Eliminar Canción" isActive="{{ request()->is('cancion/eliminar') }}" icon="trash"
                route="{{ route('songDelete.index') }}" />
        @endcan

    @endcan

    <x-app.nav-divider />
    <x-app.nav-header name="CANCIONEROS" />
    @can('songlists.index')
        <x-app.nav-item icon="clipboard-list"
            isActive="{{ (request()->is('cancioneros*') && !request()->is('cancioneros/create') && !request()->is('cancioneros/*/edit')) || request()->is('cancionero/*/cancion/*') ? 'active' : '' }}"
            text="Ver Cancioneros" route="{{ route('cancioneros.index') }}" />

        @can('songlists.create')
            <x-app.nav-item icon="folder-open" isActive="{{ request()->is('cancioneros/create') ? 'active' : '' }}"
                text="Crear Cancionero" route="{{ route('cancioneros.create') }}" />
        @endcan
        <x-app.nav-divider />
        @can('songlists.edit')
            <x-app.nav-header name="TUS CANCIONEROS" />
            <x-app.nav-item icon="hammer"
                isActive="{{ request()->is('cancionero/modificar') || request()->is('cancioneros/*/edit') ? 'active' : '' }}"
                text="Modificar Cancionero" route="{{ route('filesEdits.index') }}" />
        @endcan
        @can('songlists.destroy')
            <x-app.nav-item icon="trash" isActive="{{ request()->is('cancionero/eliminar') ? 'active' : '' }}"
                text="Eliminar Cancionero" route="{{ route('filesDelete.index') }}" />
        @endcan
    @endcan

    <x-app.nav-divider />
    <x-app.nav-header name="ACORDES" />
    @can('chords.index')
        <x-app.nav-item icon="guitar"
            isActive="{{ request()->is('acordes*') && !request()->is('acordes/create') && !request()->is('acordes/*/edit') ? 'active' : '' }}"
            text="Ver Acordes" route="{{ route('acordes.index') }}" />

        @can('chords.create')
            <x-app.nav-item icon="wrench" isActive="{{ request()->is('acorde/crear*') ? 'active' : '' }}"
                text="Crear Acordes" route="{{ route('chordsCreateIndex') }}" />
        @endcan
        <x-app.nav-divider />
        @can('chords.edit')
            <x-app.nav-header name="TUS ACORDES" />
            <x-app.nav-item icon="hammer"
                isActive="{{ request()->is('acorde/edit*') || request()->is('acordes/*/edit') || request()->is('acorde/*/edit') ? 'active' : '' }}"
                text="Modificar Acordes" route="{{ route('chordsEdit') }}" />
        @endcan
        @can('chords.destroy')
            <x-app.nav-item icon="trash"
                isActive="{{ request()->is('acorde/delete') || request()->is('acorde/*/delete') ? 'active' : '' }}"
                text="Eliminar Acordes" route="{{ route('chordsDelete') }}" />
        @endcan
    @endcan
    </nav>
</ul>
<!-- End of Sidebar -->
