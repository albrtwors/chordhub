    <div id="songModal" style="z-index:3000000000000000" class="modal-container fade-modal">
        <div class="modal-section">
            <header>
                <h3 id="songName"class="fw-bold">
                    Letra
                </h3>
            </header>
            <main id="songLetter">

            </main>
            <footer class="d-flex justify-content-center">
                <div>
                    <button id="modalCloseButton" class="btn btn-primary">Cerrar</button>
                </div>

            </footer>
        </div>
    </div>


    <input type="text" value="<?php echo e($songs); ?>" id="allSongsJSON" class="d-none">
    <div id="editBox" class="d-flex flex-column gap-3 m-3">
        <div class="h3 fw-bold">Estructura</div>
        <div class="d-flex flex-wrap gap-3" id="editMenu">

        </div>
        <h3 class="fw-bold">Buscar Letras</h3>
        <div class="d-flex">
            <input type="text" id="searchSongsInput" class="form-control w-25">
        </div>
        <div id="songsDock" class="d-flex flex-wrap gap-2">

        </div>
    </div>
<?php /**PATH /home/notalber/Documents/Coding/ChordhubV3/resources/views/components/song/song-searcher.blade.php ENDPATH**/ ?>