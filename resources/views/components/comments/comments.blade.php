@forelse($list as $li)
    <x-comments.item :route="$route" :postype="$postype" :postid="$postid" :itemxd="$li">
        <x-slot name="attrs">
            {{ $attributes }}
        </x-slot>
    </x-comments.item>
@empty
@endforelse
