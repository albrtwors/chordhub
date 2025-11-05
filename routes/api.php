<?php

use App\Http\Controllers\Song\SongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Ruta GET para obtener lista de usuarios
Route::get('/cancion/api', [SongController::class, 'getSongsAPI']);