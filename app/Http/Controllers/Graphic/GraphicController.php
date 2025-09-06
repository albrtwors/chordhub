<?php

namespace App\Http\Controllers\Graphic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;

trait GraphicController{
    public function getPopularSongs(){
        // Obtener las 5 canciones más visitadas con su cantidad y nombre
        $topSongs = DB::table('visits')
            ->select('visitable_id', DB::raw('COUNT(*) as total_visits'))
            ->where('visitable_type', 'App\Models\Song')
            ->groupBy('visitable_id')
            ->orderByDesc('total_visits')
            ->limit(5)
            ->get();

        $topSongData = [];

        foreach ($topSongs as $song) {
            // Obtener la canción relacionada por relación polimórfica
            $songModel = \App\Models\Song::find($song->visitable_id);
            if ($songModel) {
                $topSongData[] = [
                    'name' => $songModel->name, // Asumiendo que la columna se llama 'name'
                    'visits' => $song->total_visits,
                ];
            }
        }

        // Asegurarse de que haya 5 elementos, rellenando con null si es necesario
        while (count($topSongData) < 5) {
            $topSongData[] = null;
        }

        // Convertir a JSON
        $topSongJson = json_encode($topSongData);

        return $topSongJson;
    }

 
    public function getPopularGenres()
    {
   

        // Obtenemos los géneros con el total de visitas a canciones de ese género
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

        // Rellenar con null si hay menos de 5
        while (count($result) < 5) {
            $result[] = null;
        }

        return json_encode($result);
    }
}