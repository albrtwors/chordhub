<?php
    switch ($role) {
        case 'owner':
            $emote = 'crown';
            break;
        case 'admin':
            $emote = 'crown';
            break;
        case 'musician':
            $emote = 'music';
            break;
        case 'singer':
            $emote = 'microphone';
            break;
        case 'support':
            $emote = 'wrench';
            break;
        case 'visitor':
            $emote = 'circle-user';
            break;
        default:
            $emote = 'circle-user';
    }

?>


<i class="fas fa-<?php echo e($emote); ?>">

</i>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/components/app/role-emote.blade.php ENDPATH**/ ?>