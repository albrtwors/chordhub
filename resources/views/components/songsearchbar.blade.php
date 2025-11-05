    <form method="get" class="d-flex justify-content-center gap-3" action="{{$route}}">

     

        <div class="input-group col-3">
            <input type="text" class="form-control bg-light border-0 small" name="songname" placeholder="Buscar..."
                aria-label="Search" aria-describedby="basic-addon2">

        </div>

        <select name="genre"  class="col-2 form-select" aria-label="Default select example">

            <option value="" selected>Todos</option>
            @foreach($genre as $gen)
            <option value="{{$gen->id}}">{{$gen->name}}</option>
            @endforeach
        </select>

        <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
        </button>

    </form>