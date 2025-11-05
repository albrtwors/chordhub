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
        $topSongJson = $this->getPopularSongs() ?? null;
        $topGenreJson = $this->getPopularGenres() ?? null;
        $topSong = $this->getMostVisitedSong() ?? null;
        $lastSong = $this->getLastSong() ?? null;
        $songs = $this->getSongs() ?? null;
        $userSongs = $this->getUserSongs() ?? null;
        $topTonalities = $this->topTonalities() ?? null;
        $topContributors = $this->topContributors() ?? null;
        // $topFilesJson = $this->getPopularFiles() ?? null;
        $mostListedSongs = $this->mostListedSongs() ?? null;
        return view("modules.App.dashboard", compact(['genres', 'topSongJson', 'topGenreJson', 'topSong', 'lastSong', 'songs', 'userSongs', 'topTonalities', 'topContributors', 'mostListedSongs']));
    }

    public function newsIndex(){
        return view('modules.app.news');
    }

    public function uploadsIndex(){
        return view('modules.user.userUploads');
    }


    public function renderProfile()
    {

        return view("modules.App.profile");
    }


}