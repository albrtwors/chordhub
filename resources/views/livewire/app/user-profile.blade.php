<div>

    <div class="container">
        <div class="row">



            <div class="col-xl-6 col-md-10">

                <div class="d-flex justify-content-center my-3">
                    <form id="pfp" action="{{ route('app_change_pfp') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        @livewire('form.image-form', ['userId' => Auth::user()->id, 'existingImageUrl' => isset(Auth::user()->image) ? Auth::user()->image->url : env('DEFAULT_PFP')])
                        <input type="submit" class="btn btn-primary mt-3" value="Subir">
                    </form>

                </div>


                <div class="d-flex row justify-content-start mx-5">
                    <h4 class="text-start fw-bold">Cambiar Nombre de Usuario</h4>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">
                    </div>
                    <div class="my-3 d-flex justify-content-start">
                        <button class="btn btn-primary">Subir Cambios</button>
                    </div>
                </div>

                <div class="d-flex row justify-content-start mx-5">

                    <h4 class="text-start fw-bold">Cambiar Contraseña</h4>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>
                    <h4 class="text-start fw-bold">Repite la Contraseña</h4>
                    <div class="input-group my-3 w-50">
                        <input type="text" class="form-control bg-light small" name="song_name" aria-label="Search"
                            aria-describedby="basic-addon2">

                    </div>
                    <div class="my-3 d-flex justify-content-start">
                        <button class="btn btn-primary">Subir Cambios</button>
                    </div>
                </div>





            </div>

            <div class="d-flex flex-column gap-5 flex-auto col-xl-5  col-md-10 col-10 col-sm-10 ">

                <div class="user-card">
                    <h4 class="fw-bold">Datos del Usuario</h4>

                    <div class="d-flex justify-content-start align-items-start flex-column">
                        <h5 class=""><b>Creado el</b> {{ Auth::user()->created_at->format('d/m/Y') }}</h5>
                        <h5 class=""><b>Email:</b> {{ Auth::user()->email }} </h5>
                        <h5 class=""><b>Roles actuales:</h5>
                        <ul>
                            @foreach (Auth::user()->roles as $role)
                                <li>{{ $role->name }} <x-app.role-emote role="{{ $role->name }}" /></li>
                            @endforeach
                        </ul>
                        <img class="d-sm-none d-xl-block d-md-block d-sm-none d-none user-pfp-card" width="100px"
                            height="100px" src="{{ Auth::user()->image->url ?? env('DEFAULT_PFP') }}" alt="">
                    </div>

                </div>

                <div class="user-card">
                    <h4 class="fw-bold">Datos del Usuario</h4>

                    <div class="d-flex justify-content-start align-items-start flex-column">
                        <h5 class=""><b>Creado el</b> {{ Auth::user()->created_at->format('d/m/Y') }}</h5>
                        <h5 class=""><b>Email:</b> {{ Auth::user()->email }} </h5>
                        <h5 class=""><b>Roles actuales:</h5>
                        <ul>
                            @foreach (Auth::user()->roles as $role)
                                <li>{{ $role->name }}</li>
                            @endforeach
                        </ul>
                        <img class="d-sm-none d-xl-block d-md-block d-sm-none d-none user-pfp-card" width="100px"
                            height="100px" src="{{ Auth::user()->image->url ?? env('DEFAULT_PFP') }}" alt="">
                    </div>

                </div>

            </div>


        </div>
    </div>
