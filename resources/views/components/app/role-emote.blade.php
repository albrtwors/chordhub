@php
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

@endphp


<i class="fas fa-{{ $emote }}">

</i>
