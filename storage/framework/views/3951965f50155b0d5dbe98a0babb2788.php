<?php
    if ($state == true) {
        $class = 'fade-modal show';
    } else {
        $class = 'fade-modal';
    }
?>
<div class="modal-container <?php echo e($class); ?>">
    <div class="modal-section">
        <header>
            <h3 class="fw-bold"><?php echo e($head); ?></h3>
        </header>
        <main>
            <?php echo e($content); ?>

        </main>
        <footer>
            <?php echo e($footer); ?>

        </footer>
    </div>
</div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/components/modal.blade.php ENDPATH**/ ?>