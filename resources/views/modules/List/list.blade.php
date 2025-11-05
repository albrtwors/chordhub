@extends('layouts.app')

@section('content')
    <x-react.vite-refresh path="resources/react/comments/app.jsx" />
  
   
    <x-app.page-header text="{{ $list->name }}" />

    <div class="d-flex justify-content-center gap-3 my-3">
        @can('songlists.edit')
            @if (
                $list->user_id == Auth::user()->id ||
                    $list->collab ||
                    Auth::user()->hasRole('admin') ||
                    Auth::user()->hasRole('owner'))
                <x-app.link route="{{ route('cancioneros.edit', $list->id) }}">
                    <x-forms.button color="success" text="Modificar" />
                </x-app.link>
            @endif
        @endcan
        @can('songlists.destroy')
            @if ($list->user_id == Auth::user()->id || Auth::user()->hasRole('admin') || Auth::user()->hasRole('owner'))
                <form id="delform" action="{{ route('cancioneros.destroy', $list->id) }}">
                    @csrf
                    @method('DELETE')
                    <x-forms.button data-id="{{ $list->id }}" color="danger" submit type="submit" text="Eliminar" />

                </form>
            @endif
        @endcan
    </div>
    <ul class="list-group m-5">
        @foreach ($list_songs as $song)
            <x-app.link route="/cancionero/{{ $list->id }}/cancion/{{ $song->id }}">
                <li class="list-group-item">{{ $song->name }}</li>
            </x-app.link>
        @endforeach
    </ul>
    <x-comments.comment-meta id="{{ $list->id }}" type="file" />
    <div id="comment-widget"></div>


    <script type="module" src="{{ asset('js/List/SongListDelete.js') }}"></script>
@endsection
