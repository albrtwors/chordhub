    <h6 class="mt-3 text-center fw-bold">Nombre de la canción</h6>

    <div class="input-group mt-3">
        <input type="text" value="{{ isset($song) ? $song->name : '' }} " class="form-control bg-light small"
            name="name" placeholder="ej: Tú fidelidad es grande" aria-label="Search" aria-describedby="basic-addon2">

    </div>
