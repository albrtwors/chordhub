<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Graphic\GraphicController;
use App\Http\Controllers\Auth\AuthSessionVerify;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Visit;
use Illuminate\Support\Facades\DB;
class AppViewController extends Controller
{
    use GraphicController;

    public function renderApp()
    {

        $genres = Genre::all();
        $topSongJson = $this->getPopularSongs();
        $topGenreJson = $this->getPopularGenres();
        return view("modules.App.dashboard", compact(['genres', 'topSongJson', 'topGenreJson']));
    }






    public function renderProfile()
    {

        return view("modules.App.profile");
    }


}