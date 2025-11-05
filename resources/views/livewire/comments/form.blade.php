 @if ($isFirstComment)
     <div>
         <form wire:key="{{ $postId }}-{{ $commentId }}" wire:submit.prevent="save" class="form-group">



             <textarea wire:model="commentText" class="form-control my-3 col-5"></textarea>

             <button type="submit" class="btn btn-primary">Subir
                 Respuesta</button>

         </form>
     </div>
 @else
     <div id="answer-{{ $commentId }}-{{ $parentId }}" class="collapse">
         <form wire:key="{{ $postId }}-{{ $commentId }}" wire:submit.prevent="save" class="form-group">


             <textarea wire:model="commentText" class="form-control my-3 col-5" name="comment" rows="5"></textarea>
             <button type="submit" class="btn btn-primary">Subir
                 Respuesta</button>

         </form>
     </div>
 @endif
