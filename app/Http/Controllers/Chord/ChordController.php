<?php

namespace App\Http\Controllers\Chord;
use App\Models\Song;
use App\Models\Chord;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Search\SearchSongController;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ChordNotification;
use App\Events\ChordEvent;
use App\Models\User;
class ChordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::paginate(9);
        $genre = Genre::all();
        return view("modules.Chord.songs", compact(['songs', 'genre']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $song = Chord::where('song_id', $request->song_id)->first();
        
        if($song){
            $song->update(['structure'=>$request->song_structure]);
            return response()->json(['status'=>'success', 'message'=>'Canción actualizada']);
        }

        $chord = Chord::create([
            'song_id'=>$request->song_id,
            'structure'=>$request->song_structure,
            'user_id'=>Auth::user()->id
        ]);

        $users = User::all()->except(Auth::user()->id);
        foreach($users as $user){
            $user->notify(new ChordNotification($chord));
        }
        
        return response()->json(['status'=>'success', 'message'=>'Acordes creados']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = Song::find($id);
        $songchords = $song->chord;
        if($songchords){
            $comments = $songchords->comments()->whereNull('parent_id')->get();
        }else{
            $comments=null;
        }
        
        return view('modules.Chord.song', compact(['song', 'comments']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = Song::find($id);
        $user = $song->user;
        return view('modules.Chord.edit', compact(['song', 'user']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Song::find($id)->chord()->delete();
        return response()->json(['status'=>'success', 'message'=>'Acordes eliminados']);
    }

    public function searchByNameAndGenre(Request $request)
    {
       return SearchSongController::SearchSongs($request, 'modules.Chord.songs');
    }
}