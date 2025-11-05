

    @forelse($list as $li)
        <x-comments.item :route="$route" :postype="$postype" post_id="{{$post_id}}" :item="$li->comments">


        </x-comments.item>
    @empty    

    @endforelse
