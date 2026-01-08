<div>
  
        <div class="d-flex gap-3 mx-5" style="overflow-x:scroll">
            @if ($type == 'show')
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">
                    Permisos
                </label>
                <select wire:model.live="ownFiles" class="form-control">

                    <option value="{{ false }}">Cancioneros de todos</option>
                    <option value="{{ true }}">Solo cancioneros Propios</option>
                </select>
            </div>
            @elseif($type == 'edit')
            <div class="d-flex flex-column gap-2">
                <label for="" class="fw-bold">
                    Permisos
                </label>
                <select wire:model.live="collabFiles" class="form-control">
                    <option value="{{ false }}">Cancioneros Propios</option>
                    <option value="{{ true }}">Solo Cancioneros Colaborativos</option>
                </select>
            </div>
            @endif

            <div class="d-flex flex-column gap-2">
            <label for="" class="fw-bold">
                Paginación
            </label>
            <select wire:model.live="quantity" class="form-control">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="60">60</option>
            </select>
            </div>
            <div class="d-flex flex-column gap-2">
            <label for="" class="fw-bold">
                Nombre
            </label>           
            <input wire:model.live="name" placeholder="Busca un cancionero" type="text" class="form-control">
            </div>


        </div>

  

    <div class="d-flex justify-content-center mt-2">
        {{ $lists->links() }}
    </div>

    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div id="list_row" class="row">
               
                @forelse($lists as $li)
                     <x-file.file-card id="{{ $li->id }}" type="{{ $type }}" name="{{ $li->name }}" author="{{ $li->user->name }}" :songs="$li->songs"/>
                    {{-- <div id="list_template" class="col-xl-3 col-sm-6 col-12 mt-3">




                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="fas fa-music fa-2x"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h6>{{ $li->date }}</h6>
                                            <h5>{{ $li->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($type == 'show')
                                <div class="d-flex justify-content-center my-3">
                                    <a href="{{ route('cancioneros.show', $li->id) }}"><button
                                            class="btn btn-primary">Ver</button></a>
                                </div>
                            @elseif($type == 'edit')
                                <div class="d-flex justify-content-center my-3">
                                    <a href="{{ route('cancioneros.edit', $li->id) }}"><button
                                            class=" btn btn-primary">Modificar</button></a>
                                </div>
                            @else
                                <div class="d-flex justify-content-center my-3">
                                    <button wire:click="showDelete({{ $li->id }})"
                                        class=" btn btn-danger">Eliminar</button>
                                </div>
                            @endif
                        </div>

                    </div> --}}

















                    {{-- <div class="col-xl-4 col-md-10 col-sm-10">
          <a href="{{route("list", $li->id)}}">
          <blockquote class="p-3 quote-box">

              <p class="quote-text">
                  {{$li->date}}
              </p>
              <hr>
              <div class="blog-post-actions">
                  <p class="blog-post-bottom pull-left">
                      {{$li->name}}
                  </p>

              </div>
          </blockquote>
          </a>
      </div>
      --}}
                @empty
                    <div class="m-5">
                        <h6>No hay cancioneros</h6>
                    </div>
                @endforelse
            </div>
        </section>

    </div>



    <x-modal state="{{ $open }}">
        <x-slot name="head">
            <h3 class="fw-bold">
                Eliminar cancionero
            </h3>
        </x-slot>
        <x-slot name="content">
            <h3 class="fw-bold">Estás seguro de que quieres eliminar {{ $selectedFile->name }}</h3>
            <div class="d-flex justify-content-center gap-3">
                <button wire:click="$set('open', false)" class="btn btn-primary">Cerrar</button>
                <button wire:click="delete()" class="btn btn-danger">Eliminar</button>
            </div>
        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-modal>

    <script type="module" src="{{ asset('js\Admin\Alerts.js') }}"></script>


</div>
