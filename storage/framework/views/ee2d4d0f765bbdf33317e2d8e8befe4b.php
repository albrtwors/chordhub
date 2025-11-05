<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Chordhub</title>
    <!-- Custom fonts for this template-->
    <?php if (isset($component)) { $__componentOriginal342247262f5f9042b7e6ae04f59b0580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal342247262f5f9042b7e6ae04f59b0580 = $attributes; } ?>
<?php $component = App\View\Components\Styles::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('styles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Styles::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal342247262f5f9042b7e6ae04f59b0580)): ?>
<?php $attributes = $__attributesOriginal342247262f5f9042b7e6ae04f59b0580; ?>
<?php unset($__attributesOriginal342247262f5f9042b7e6ae04f59b0580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal342247262f5f9042b7e6ae04f59b0580)): ?>
<?php $component = $__componentOriginal342247262f5f9042b7e6ae04f59b0580; ?>
<?php unset($__componentOriginal342247262f5f9042b7e6ae04f59b0580); ?>
<?php endif; ?>

<body id="page-top ">

    <?php if (isset($component)) { $__componentOriginal9b0da1ce4a7273760fcbfd5667774437 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b0da1ce4a7273760fcbfd5667774437 = $attributes; } ?>
<?php $component = App\View\Components\Loader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Loader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b0da1ce4a7273760fcbfd5667774437)): ?>
<?php $attributes = $__attributesOriginal9b0da1ce4a7273760fcbfd5667774437; ?>
<?php unset($__attributesOriginal9b0da1ce4a7273760fcbfd5667774437); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b0da1ce4a7273760fcbfd5667774437)): ?>
<?php $component = $__componentOriginal9b0da1ce4a7273760fcbfd5667774437; ?>
<?php unset($__componentOriginal9b0da1ce4a7273760fcbfd5667774437); ?>
<?php endif; ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
        <!-- End of sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ">

            <!-- Main Content -->

            <!-- Topbar -->
            <?php if (isset($component)) { $__componentOriginal7f27d4f21ff184c2d29c20efafbd7387 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f27d4f21ff184c2d29c20efafbd7387 = $attributes; } ?>
<?php $component = App\View\Components\Topbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('topbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Topbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7f27d4f21ff184c2d29c20efafbd7387)): ?>
<?php $attributes = $__attributesOriginal7f27d4f21ff184c2d29c20efafbd7387; ?>
<?php unset($__attributesOriginal7f27d4f21ff184c2d29c20efafbd7387); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f27d4f21ff184c2d29c20efafbd7387)): ?>
<?php $component = $__componentOriginal7f27d4f21ff184c2d29c20efafbd7387; ?>
<?php unset($__componentOriginal7f27d4f21ff184c2d29c20efafbd7387); ?>
<?php endif; ?>
            <!-- End of Topbar -->

            <!----------------BODY ------------------------>

            <?php echo e($slot); ?>


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
                        <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>


        <?php if (isset($component)) { $__componentOriginal7ab197232c97c7955fb023ba2629a718 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ab197232c97c7955fb023ba2629a718 = $attributes; } ?>
<?php $component = App\View\Components\Scripts::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Scripts::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ab197232c97c7955fb023ba2629a718)): ?>
<?php $attributes = $__attributesOriginal7ab197232c97c7955fb023ba2629a718; ?>
<?php unset($__attributesOriginal7ab197232c97c7955fb023ba2629a718); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ab197232c97c7955fb023ba2629a718)): ?>
<?php $component = $__componentOriginal7ab197232c97c7955fb023ba2629a718; ?>
<?php unset($__componentOriginal7ab197232c97c7955fb023ba2629a718); ?>
<?php endif; ?>

        <?php echo $__env->yieldPushContent('scripts'); ?>

        
</body>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


</html><?php /**PATH C:\xampp\htdocs\ChordhubV3\resources\views/layouts/spa-app.blade.php ENDPATH**/ ?>