<?php $__env->startSection("content"); ?>
<style>
    #structure{
        
        line-height: 2;

    }
</style>
<input type="text" id="songjson" value="<?php echo e($songs->structure); ?>" class="d-none">

<div class="row">
    <div class="col-xl-6 col-md-12 col-md-12 col-sm-12">
        <div class="d-flex ms-5 my-3 gap-2">
            <a href="<?php echo e($lastVisited); ?>"><button class="mt-1 btn btn-primary"><i
                        class="fas fa-arrow-left"></i></button></a>
            <h1 class=""><?php echo e($songs->name); ?></h1> 
			
        </div>
    </div>
	
    <div class="col-xl-5 col-md-12 col-md-12 col-sm-12 d-flex me-5 justify-content-end">
        <div class="d-flex my-3">
            <h6 class="me-1 mt-2">Subido por: <?php echo e($user->name); ?> </h6> <img class="img-profile rounded-circle" width="32" height="32" src="<?php echo e($user->pfp); ?>"></img>
        </div>
    </div>

</div>
<a href="<?php echo e(route('chord_view', $songs->id)); ?>"><button class=" ms-5 btn btn-primary">Ver acordes</button> </a>

<div  class="text-center structure" id="structure">
   
</div>





<script type="module" src="<?php echo e(asset('js/Song/SongView.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Chordhub\resources\views/modules/Song/song.blade.php ENDPATH**/ ?>