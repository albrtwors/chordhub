 <!--[if BLOCK]><![endif]--><?php if($isFirstComment): ?>
     <div>
         <form wire:key="<?php echo e($postId); ?>-<?php echo e($commentId); ?>" wire:submit.prevent="save" class="form-group">



             <textarea wire:model="commentText" class="form-control my-3 col-5"></textarea>

             <button type="submit" class="btn btn-primary">Subir
                 Respuesta</button>

         </form>
     </div>
 <?php else: ?>
     <div id="answer-<?php echo e($commentId); ?>-<?php echo e($parentId); ?>" class="collapse">
         <form wire:key="<?php echo e($postId); ?>-<?php echo e($commentId); ?>" wire:submit.prevent="save" class="form-group">


             <textarea wire:model="commentText" class="form-control my-3 col-5" name="comment" rows="5"></textarea>
             <button type="submit" class="btn btn-primary">Subir
                 Respuesta</button>

         </form>
     </div>
 <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/livewire/comments/form.blade.php ENDPATH**/ ?>