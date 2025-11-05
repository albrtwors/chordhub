<?php $__env->startSection('content'); ?>

<h1 class="ms-5 py-3">
    Modificar cancionero
</h1>
<h3 class="ms-5 pb-3">
    Modifica tus cancioneros
</h3>


<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
<?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>




    
      <div class="col-xl-3 col-sm-6 col-12">
          
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
              <a href="<?php echo e(route("list_mod", $li->id)); ?>">
              <button data-id="<?php echo e($li->id); ?>"  class="btn btn-success songoflist" type="button">
                <i class="fas fa-wrench"></i>
              </button>
            </a>
            </div>
          </div>
        </div>
       
      </div>
    





















    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<?php endif; ?>
    </div>
  </section>

</div>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Chordhub\resources\views/modules/List/modify.blade.php ENDPATH**/ ?>