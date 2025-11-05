<?php $__env->startSection('content'); ?>

<h1 class="ms-5 py-3">
    Cancioneros
</h1>
<h3 class="ms-5 pb-3">
    Aquí encontrarás todos los cancioneros disponibles
</h3>


<div class="d-flex justify-content-center container">

    <div class="div">
        <form class="ms-5 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" id="search_lists" placeholder="Buscar..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>



</div>






<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div id="list_row" class="row">
<?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>




    
      <div id="list_template" class="col-xl-3 col-sm-6 col-12 mt-3">
         <a href="<?php echo e(route("list", $li->id)); ?>"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-music fa-2x"></i>
                </div>
                <div class="media-body text-right">
                  <h6><?php echo e($li->date); ?></h6>
                  <h5><?php echo e($li->name); ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>
    





















    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<?php endif; ?>
    </div>
  </section>

</div>

<script type="module" src="<?php echo e(asset('js/Search/SearchList.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Chordhub\resources\views/modules/List/lists.blade.php ENDPATH**/ ?>