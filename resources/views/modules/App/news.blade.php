@extends('layouts.app')
@section('content')
    <x-react.vite-refresh path="resources/react/app.jsx" />
    <x-app.page-header text="Novedades" />
    <div id="app">

    </div>
    <div class="d-flex flex-column col-xl-6 col-md-10 col-10 col-sm-10 m-5 gap-4">
        <div class="d-flex  flex-column gap-1">

            Aquí encontrarás cada uno de los cambios importantes y actualizaciones que reciba chordhub. Cualquier
            sugerencia o bug que debas reportar, puedes enviarla al correo.

        </div>




        <x-news.news-card version="1.0.0 - 4/9/2025" title="Versionado de Acordes"
            desc="Ahora podrás crear distintas versiones de tus armonías, dichas versiones no serán modificables, a no ser de que actives la participación colaborativa" />

        <x-news.news-card version="1.0.0 - 30/8/2025" title="Creación de Acordes"
            desc="En horabuena!, si tienes el rol músico, ahora podrás crear acordes de las canciones de nuestro repositorio. El editor visual te permitirá añadir ágilmente las armonías que tu banda necesita seguir" />

        <x-news.news-card version="1.0.0 - 10/8/2025" title="Creación de Cancioneros"
            desc="Si tienes el rol cantante o soporte ahora puedes subir tus propios cancioneros en el repositorio. Podrás emplear un buscador con todas las canciones que tenemos disponibles actualmente!" />

        <x-news.news-card version="1.0.0 - 27/7/2025" title="Creación de Canciones"
            desc="Si tienes el rol cantante ahora puedes subir tus propias canciones al repositorio, podrás configurar la estructura a tu gusto" />



        <x-news.news-card version="1.0.0 - 4/9/2025" title="Versionado de Acordes"
            desc="Ahora podrás crear distintas versiones de tus armonías, dichas versiones no serán modificables, a no ser de que actives la participación colaborativa" />

        <x-news.news-card version="1.0.0 - 30/8/2025" title="Creación de Acordes"
            desc="En horabuena!, si tienes el rol músico, ahora podrás crear acordes de las canciones de nuestro repositorio. El editor visual te permitirá añadir ágilmente las armonías que tu banda necesita seguir" />

        <x-news.news-card version="1.0.0 - 10/8/2025" title="Creación de Cancioneros"
            desc="Si tienes el rol cantante o soporte ahora puedes subir tus propios cancioneros en el repositorio. Podrás emplear un buscador con todas las canciones que tenemos disponibles actualmente!" />

        <x-news.news-card version="1.0.0 - 27/7/2025" title="Creación de Canciones"
            desc="Si tienes el rol cantante ahora puedes subir tus propias canciones al repositorio, podrás configurar la estructura a tu gusto" />

    </div>
@endsection
