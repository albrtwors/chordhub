<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Song;
use Illuminate\Http\Request;

class SongCreateController extends Controller
{
    public function createSong(Request $request)
    {
        $user = User::where('name', session('user_name'))->first();
        $id = $user->id;

        $name = $request->input('song_name');
        $author = $request->input('song_author');
        $genre = $request->input('song_genre');
        $structure = $request->input('song_structure');
        $keywords = $request->input('song_keywords');

        $this->validateSong($request);

        $this->insertSongOnDb($name, $author, $genre, $structure, $keywords, $id);
        return response()->json(['status' => 'success', 'message' => 'Canción creada exitosamente']);
    }

    function validateSong(Request $request)
    {
        $request->validate([
            'song_name' => 'required|string|max:255',
            'song_author' => 'required|string|max:255',
            'song_genre' => 'required|string|max:50',
            'song_structure' => 'required|string',
            'song_keywords' => 'nullable|string|max:255',
        ]);
    }

    function insertSongOnDb($name, $author, $genre, $structure, $keywords, $id)
    {
        $song = new Song();
        $song->name = $name;
        $song->author = $author;
        $song->genre = $genre;
        $song->structure = $structure;
        $song->keywords = $keywords;
        $song->user_id = $id;

        if ($song->save()) {
            return true;
        }

        return false;
    }
}