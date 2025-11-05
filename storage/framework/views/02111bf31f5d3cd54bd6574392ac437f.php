<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/chatbot.css')); ?>">

<div class=" d-flex mt-9 justify-content-center">
    <section class="chat bg-white">
        <header class="text-center">
            <h1 class=" mt-1 "> CHATBOT</h1>

        </header>
        <main id="chatSection">  
            <span class="chatbot-message">
                <h6 class="message-remitent">Bot</h6>
                <p class="message">Pregunta lo que gustes</p>

            </span>
            

     
    
        </main>
     
            <form class="chat-area" id="chatbot" action="<?php echo e(route('chatbot.prompt')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <textarea name="prompt" id="chatArea" class="form-control">

                </textarea>
                <button type="submit" class="btn btn-primary">
                    Enviar
                </button>
            </form>
      
      
    </section>

</div>

<script type="module" src="<?php echo e(asset('js/Chatbot/ChatbotPromptHandler.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ChordhubV2\resources\views/modules/Chatbot/ChatbotIndex.blade.php ENDPATH**/ ?>