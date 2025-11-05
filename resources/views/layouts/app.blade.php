<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chordhub</title>
    <!-- Custom fonts for this template-->
    <x-styles></x-styles>



<body id="page-top ">
    @yield('modal')


    <x-loader />
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <x-navbar />
        <!-- End of sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ">

            <!-- Main Content -->

            <!-- Topbar -->
            <x-topbar />
            <!-- End of Topbar -->

            <!----------------BODY ------------------------>

            @yield('content')

            <!-- Footer -->

            <!-- End of Footer -->

            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Listo para irte?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body fw-light">Seguro de que quieres cerrar sesión?.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>


        <x-scripts />

        @stack('scripts')

        {{-- <script>
            const elements = document.querySelectorAll('*');
            elements.forEach(element => {
                element.classList.add('bg-black', 'text-white');
                if (element.tagName.toLowerCase() === 'input') {
                    element.classList.add('bg-dark');
                }
                if (element.tagName.toLowerCase() === 'nav') {
                    element.classList.add('bg-dark');
                }
            });
        </script> --}}
</body>
@livewireScripts

</html>
