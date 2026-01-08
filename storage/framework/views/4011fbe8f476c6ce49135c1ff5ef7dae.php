<?php $__env->startSection('content'); ?>
    <div class="container d-flex flex-column gap-3 ">

        
        <div class="d-flex gap-3">        
            <div class="d-flex flex-column">
                <h1 class="fw-bold">Bienvenido  <?php if (isset($component)) { $__componentOriginal9869327a936d85f664cf3e49bc089e6c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9869327a936d85f664cf3e49bc089e6c = $attributes; } ?>
<?php $component = App\View\Components\Utils\RoleLabel::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('utils.role-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Utils\RoleLabel::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['role' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->roles->first()->name)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9869327a936d85f664cf3e49bc089e6c)): ?>
<?php $attributes = $__attributesOriginal9869327a936d85f664cf3e49bc089e6c; ?>
<?php unset($__attributesOriginal9869327a936d85f664cf3e49bc089e6c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9869327a936d85f664cf3e49bc089e6c)): ?>
<?php $component = $__componentOriginal9869327a936d85f664cf3e49bc089e6c; ?>
<?php unset($__componentOriginal9869327a936d85f664cf3e49bc089e6c); ?>
<?php endif; ?> <?php echo e(Auth::user()->name); ?></h1>
            </div>
          
        </div>
       
        

        <?php if (\Illuminate\Support\Facades\Blade::check('role', 'admin')): ?>
            <?php if (isset($component)) { $__componentOriginal3db3448afc9c01fb169467628bf35c6e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3db3448afc9c01fb169467628bf35c6e = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\AdminProcess::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.admin-process'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dashboard\AdminProcess::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3db3448afc9c01fb169467628bf35c6e)): ?>
<?php $attributes = $__attributesOriginal3db3448afc9c01fb169467628bf35c6e; ?>
<?php unset($__attributesOriginal3db3448afc9c01fb169467628bf35c6e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3db3448afc9c01fb169467628bf35c6e)): ?>
<?php $component = $__componentOriginal3db3448afc9c01fb169467628bf35c6e; ?>
<?php unset($__componentOriginal3db3448afc9c01fb169467628bf35c6e); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('role', 'singer')): ?>
            <?php if (isset($component)) { $__componentOriginald101cc5d59a94f7dbe553e3e01c8bd61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald101cc5d59a94f7dbe553e3e01c8bd61 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\SingProcess::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.sing-process'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dashboard\SingProcess::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald101cc5d59a94f7dbe553e3e01c8bd61)): ?>
<?php $attributes = $__attributesOriginald101cc5d59a94f7dbe553e3e01c8bd61; ?>
<?php unset($__attributesOriginald101cc5d59a94f7dbe553e3e01c8bd61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald101cc5d59a94f7dbe553e3e01c8bd61)): ?>
<?php $component = $__componentOriginald101cc5d59a94f7dbe553e3e01c8bd61; ?>
<?php unset($__componentOriginald101cc5d59a94f7dbe553e3e01c8bd61); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('role', 'musician')): ?>
            <?php if (isset($component)) { $__componentOriginalb97e4467ac1503b59cdfa430fa411876 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb97e4467ac1503b59cdfa430fa411876 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\ChordProcess::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard.chord-process'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Dashboard\ChordProcess::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb97e4467ac1503b59cdfa430fa411876)): ?>
<?php $attributes = $__attributesOriginalb97e4467ac1503b59cdfa430fa411876; ?>
<?php unset($__attributesOriginalb97e4467ac1503b59cdfa430fa411876); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb97e4467ac1503b59cdfa430fa411876)): ?>
<?php $component = $__componentOriginalb97e4467ac1503b59cdfa430fa411876; ?>
<?php unset($__componentOriginalb97e4467ac1503b59cdfa430fa411876); ?>
<?php endif; ?>
        <?php endif; ?>
        
       
      
     

        

        <!-- Begin Page Content -->
        <div class="container-fluid row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Chart de generos mas populares -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Géneros más populares</h6>


                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Chart pie de tonalidades mas usadas  -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tonalidades más usadas</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Chart pie de contribuidores -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Mayores Contribuidores</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieContributorChart"></canvas>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Chart area de canciones mas populares -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Canciones más populares</h6>


                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaSongChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->

            </div>






            <div class="row">

                <!-- Chart area de cancioneros mas visitados -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Cancioneros más visitados</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaFileChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Chart pie de canciones mas listadas -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Canciones más listadas</h6>

                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myListedChart"></canvas>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Pie Chart -->

            </div>






            <div class="row">

                

             

                <input id="topGenresValue" type="hidden" value="<?php echo e($topGenreJson); ?>" name="">
                <input id="topContributors" type="hidden" value="<?php echo e($topContributors); ?>" name="">
                <input id="topTonalities" type="hidden" value="<?php echo e(json_encode($topTonalities)); ?>" name="">
                <input id="topSongVisitsValue" type="hidden" value="<?php echo e($topSongJson); ?>" name="">
              
                <input id="mostListedSongs" type="hidden" value="<?php echo e($mostListedSongs); ?>" name="">
             

                <!-- Pie Chart -->

            </div>


            <!-- Content Row -->
            <div class="row d-flex justify-content-center">

                <!-- Content Column -->
                <div class="col-lg-7 mb-4">

                    <!-- Color System -->
                    <?php
                        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark'];
                        $index = 0;

                    ?>

                    <div class="row">
                        <h6 class="fw-bold text-center">Géneros Disponibles</h6>
                        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                if ($index === 7) {
                                    $index = 0;
                                }

                            ?>

                            <div class="col-lg-6 mb-4">
                                <div class="card bg-<?php echo e($colors[$index]); ?> text-white shadow">
                                    <div class="card-body">
                                        <?php echo e($genre->name); ?>


                                    </div>
                                </div>
                            </div>
                            <?php
                                $index++;
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>

            <!-- Page level custom scripts -->
            <?php $__env->startPush('scripts'); ?>
                <script src="<?php echo e(asset('templates/userpanel/js/demo/chart-area-demo.js')); ?>"></script>
                <script src="<?php echo e(asset('templates/userpanel/js/demo/chart-pie-demo.js')); ?>"></script>
                <script src="<?php echo e(asset('templates/userpanel/js/demo/chart-area-songs-demo.js')); ?>"></script>
                <script src="<?php echo e(asset('templates/userpanel/js/demo/chart-pie-contributor-demo.js')); ?>"></script>
                <script src="<?php echo e(asset('templates/userpanel/js/demo/chart-pie-file-demo.js')); ?>"></script>
                <script src="<?php echo e(asset('templates/userpanel/js/demo/chart-pie-listed-songs.js')); ?>"></script>
            <?php $__env->stopPush(); ?>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/albrt/Documents/Universidad 🏫/ChordhubV3/resources/views/modules/App/dashboard.blade.php ENDPATH**/ ?>