<?php

namespace App\Http\Controllers\Graphic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Tonality;
use Illuminate\Support\Facades\Auth;

trait GraphicController{
    public function getPopularSongs(){
        
        $topSongs = DB::table('visits')
            ->select('visitable_id', DB::raw('COUNT(*) as total_visits'))
            ->where('visitable_type', 'App\Models\Song')
            ->groupBy('visitable_id')
            ->orderByDesc('total_visits')
            ->limit(5)
            ->get();

        $topSongData = [];

        foreach ($topSongs as $song) {
           
            $songModel = \App\Models\Song::find($song->visitable_id);
            if ($songModel) {
                $topSongData[] = [
                    'name' => $songModel->name, 
                    'visits' => $song->total_visits,
                ];
            }
        }

       
        while (count($topSongData) < 5) {
            $topSongData[] = null;
        }

        
        $topSongJson = json_encode($topSongData);

        return $topSongJson;
    }

 
    public function getPopularGenres()
    {
   

        $topGenres = DB::table('genres')
            ->select('genres.id', 'genres.name', DB::raw('COUNT(visits.id) as total_visits'))
            ->join('songs', 'songs.genre_id', '=', 'genres.id')
            ->join('visits', function ($join) {
                $join->on('visits.visitable_id', '=', 'songs.id')
                    ->where('visits.visitable_type', '=', 'App\Models\Song');
            })
            ->groupBy('genres.id', 'genres.name')
            ->orderByDesc('total_visits')
            ->limit(5)
            ->get();

        $result = [];

        foreach ($topGenres as $genre) {
            $result[] = [
                'name' => $genre->name,
                'visits' => $genre->total_visits,
            ];
        }

      
        while (count($result) < 5) {
            $result[] = null;
        }

        return json_encode($result);
    }

    public function getMostVisitedSong(){
       
        $topSong = DB::table('visits')
        ->select('visitable_id', DB::raw('COUNT(*) as total_visits'))
        ->where('visitable_type', 'App\Models\Song') 
        ->groupBy('visitable_id')
        ->orderByDesc('total_visits')
        ->first(); 
        if($topSong){
            $song = Song::find($topSong->visitable_id);
        }else{
            $song = null;
        }
        
        return $song;
    }

    public function getLastSong(){
        $lastSong = Song::latest()->first();
        return $lastSong;
    }

    public function getSongs(){
        return Song::all();
        
    }
    public function getUserSongs(){
        return Song::where('user_id', Auth::user()->id)->get();
    
    }

    public function topContributors(){
        $topContributors = DB::table('songs')
            ->select('user_id', DB::raw('COUNT(*) as total_songs'))
            ->groupBy('user_id')
            ->orderByDesc('total_songs')
            ->limit(5)
            ->get();

        $result = [];

        foreach ($topContributors as $contributor) {
            $user = \App\Models\User::find($contributor->user_id);
            if ($user) {
                $result[] = [
                    'name' => $user->name,
                    'songs' => $contributor->total_songs,
                ];
            }
        }

       
        while (count($result) < 5) {
            $result[] = null;
        }

        return json_encode($result);
    }
    public function topTonalities() {
        $topTonalities = DB::table('tonality_user')
            ->select('tonality_id', DB::raw('COUNT(*) as total'))
            ->groupBy('tonality_id')
            ->orderByDesc('total')
            ->limit(3)
            ->get();

        $tonalityIds = $topTonalities->pluck('tonality_id')->toArray();

        $tonalities = Tonality::whereIn('id', $tonalityIds)->get();

        $result = $tonalities->map(function ($tonality) use ($topTonalities) {
            $match = $topTonalities->firstWhere('tonality_id', $tonality->id);
            $count = $match ? $match->total : 0;
            $tonality->times_used = $count;
            return $tonality;
        });

        return response()->json($result);
    }

    public function mostListedSongs(){
        $songIds = DB::table('file_song')->pluck('song_id')->toArray();

   
        $counts = DB::table('file_song')
            ->select('song_id', DB::raw('count(*) as total'))
            ->whereIn('song_id', $songIds)
            ->groupBy('song_id')
            ->get();

       
        $songData = Song::whereIn('id', $counts->pluck('song_id'))->get()->keyBy('id');

      
        $collection = $counts->map(function ($item) use ($songData) {
            return [
                'song' => $songData->get($item->song_id),
                'count' => $item->total,
            ];
        });

        return $collection;
    }

    public function getPopularFiles(){
        $topFiles = DB::table('visits')
            ->select('visitable_id', DB::raw('COUNT(*) as visit_count'))
            ->where('visitable_type', 'App\Models\File')
            ->groupBy('visitable_id')
            ->orderByDesc('visit_count')
            ->limit(4)
            ->get();

        
        $filesData = \App\Models\File::whereIn('id', $topFiles->pluck('visitable_id'))->get();

        
        $topFilesJSON = $topFiles->map(function($visit) use ($filesData) {
            $file = $filesData->firstWhere('id', $visit->visitable_id);
            return [
                'name' => $file->name,
                'visits' => $visit->visit_count,
            ];
        });

        return $topFilesJSON;
    }









}