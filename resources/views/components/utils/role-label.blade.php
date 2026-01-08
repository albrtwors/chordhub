
<label>
    @props(['role'])
    @php
        if($role=='admin'){
            $formattedRole = 'administrador';
        }elseif($role=='musician'){
            $formattedRole = 'músico';
        }elseif($role=='singer'){
            $formattedRole="cantante";
        }elseif($role=="owner"){
            $formattedRole = "dueño";
        }
        else{
            $formattedRole="visitante";
        }
    @endphp
    <span class="text-primary">
    {{$formattedRole}}
    </span>  
</label>