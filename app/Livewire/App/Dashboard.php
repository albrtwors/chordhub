<?php

namespace App\Livewire\App;

use Livewire\Component;
use App\Http\Controllers\Graphic\GraphicController;
use App\Models\Genre;

class Dashboard extends Component
{
    use GraphicController;
    public function render()
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
        $topFilesJson = $this->getPopularFiles() ?? null;
        $mostListedSongs = $this->mostListedSongs() ?? null;
        return view('livewire.app.dashboard', compact(['genres', 'topSongJson', 'topGenreJson', 'topSong', 'lastSong', 'songs', 'userSongs', 'topTonalities', 'topContributors', 'topFilesJson', 'mostListedSongs']));
    }
}