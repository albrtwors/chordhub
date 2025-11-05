<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Models\Genre;

use Illuminate\Http\Request;

class SearchSongController extends Controller
{
    public static function SearchSongs(Request $request, $route){
        $name = $request->songname;
        $genreId = $request->genre;

        $query = Song::query();


        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }

        if ($genreId) {
            $query->whereHas('genre', function($q) use ($genreId) {
                $q->where('id', $genreId);
            });
        }

        
        $songs = $query->paginate(9); 

    
        $genre = Genre::all();

        return view($route, compact('songs', 'genre'));
        
    }
}