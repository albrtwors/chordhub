@extends('layouts.app')
@section('content')
    <style>
        .script-line {
            border: 1px solid black;
            width: 100%;
            height: 1px;
        }

        .compass-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            width: 400px;
            place-items: center;
            row-gap: 50px;

            border-top: 3px solid black;

        }

        .hidden {
            display: none;
        }
    </style>
    <h1 class="ms-5 fw-bold">
        Crear Partitura
    </h1>



    <div x-data="data()" x-init="init()">
        <nav :class="{ 'hidden': !open }" x-on:click.away="close()" x-show="open"
            class="bg-white m-5 border-2 position-absolute border-gray">
            <li>hola</li>
            <li>esto es alpine</li>
        </nav>
        <button :disabled="open" x-on:click="toggle()" class="btn-primary btn ">Click</button>
    </div>

    <script>
        function data() {
            return {
                open: false,
                toggle() {
                    this.open = !this.open;
                },
                close() {
                    this.open = false;
                },
                init() {
                    this.open = false;
                }
            }
        }
    </script>

    {{-- <div class="d-flex flex-column gap-5">
        <div class="compass-container">
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
        </div>
        <div class="compass-container">
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
        </div>
        <div class="compass-container">
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
        </div>
        <div class="compass-container">
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
        </div>
        <div class="compass-container">
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
            <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
        </div>
    </div> --}}


    {{-- <div class="d-flex">

        <div class="d-flex flex-column gap-5 position-relative w-25 m-5">
            <a href="" class="position-absolute">asd</a>
            <div class="d-flex flex-column">
                <div class="script-line d-flex justify-content-around">
                    <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
                    <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="script-line d-flex justify-content-around">
                    <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
                    <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
                    <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
                    <i class="fas fa-music " style="font-size:30px; margin-top:-15px"></i>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="script-line d-flex justify-content-around"></div>
            </div>
            <div class="d-flex flex-column">
                <div class="script-line d-flex justify-content-around"></div>
            </div>
            <div class="d-flex flex-column">
                <div class="script-line d-flex justify-content-around"></div>
            </div>
        </div>


    </div> --}}




    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.6/Sortable.min.js"
        integrity="sha512-csIng5zcB+XpulRUa+ev1zKo7zRNGpEaVfNB9On1no9KYTEY/rLGAEEpvgdw6nim1WdTuihZY1eqZ31K7/fZjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const list = document.querySelectorAll('.compass-container')


        list.forEach(element => {
            new Sortable(element, {
                animation: 150,
                group: 'shared',
                onEnd: () => {
                    checkIfItsGreaterThan4(element)
                }
            })
        })

        function checkIfItsGreaterThan4(el) {
            list.forEach(element => {
                if (element.children.length > 4) {
                    element.removeChild(element.lastChild)
                    el.appendChild(el)
                }
            })
        }
    </script>
@endsection
