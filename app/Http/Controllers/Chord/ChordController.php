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
use App\Http\Requests\ChordRequest;
use App\Models\User;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Gate;

class ChordController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('can:chords.create', only: ['create']),
            new Middleware('can:chords.create', only: ['createIndex']),
            new Middleware('can:chords.index', only: ['index']),
            new Middleware('can:chords.index', only: ['show']),
            new Middleware('can:chords.edit', only: ['edit']),
            new Middleware('can:chords.edit', only: ['chordsEditIndex']),
            new Middleware('can:chords.edit', only: ['chordsEdit']),
            new Middleware('can:chords.destroy', only: ['indexDeletes']),
            new Middleware('can:chords.destroy', only: ['destroy']),
            new Middleware('can:chords.destroy', only: ['deleteChords']),
            new Middleware('can:chords.destroy', only: ['deleteIndex']),
          
           
           
        ];
    }
    public function index()
    {
        $songs = Song::paginate(9);
        $genre = Genre::all();
        return view("modules.Chord.songs", compact(['songs', 'genre']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $song = Song::find($id);
        return view('modules.Chord.create'. compact('song'));
    }

    public function createChord($id)
    {
        $song = Song::find($id);
        return view('modules.Chord.create', compact('song'));
    }

    public function createIndex(){
        
        return view('modules.Chord.createIndex');
    }
    public function renderVersions($id){
        $song = Song::find($id);
        return view('modules.Chord.versionsIndex', ['song'=>$song]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ChordRequest $request)
    {
        $song = Chord::where('song_id', $request->song_id)->first();
        

        $chord = Chord::create([
            'song_id'=>$request->song_id,
            'structure'=>$request->song_structure,
            'name'=>$request->name,
            'user_id'=>Auth::user()->id,
            'collab'=>$request->has('collab')
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
        
        $chords = Chord::find($id);
        $song = Song::find($chords->song->id);
        if($chords){
            $comments = $chords->comments()->whereNull('parent_id')->get();
        }else{
            $comments=null;
        }
        
        return view('modules.Chord.song', compact(['song', 'comments', 'chords']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chord = Chord::find($id);
        $user = $chord->user;
        $song = $chord->song;
        return view('modules.Chord.edit', compact(['chord', 'user', 'song']));
    }

    public function chordsEditIndex(){
        return view('modules.Chord.editIndex');
    }
    public function deleteIndex(){
       
        return view('modules.Chord.delete');
    }
    public function chordsEdit($id){
        $song = Song::find($id);
        return view('modules.Chord.editSongChord', compact('song'));
    }
    public function deleteChords($id){
        $song = Song::find($id);
        return view('modules.Chord.deleteSongChord', compact('song'));
    }

    public function update(Request $request, string $id)
    {
        $chord = Chord::find($id);
        if(!Gate::allows('modify-chord', $chord)){
            return response()->json(['status'=>'wrong', 'message'=>'No tienes Permisos']);
        }
        $chord->update([
            'structure'=>$request->song_structure,
            'name'=>$request->name,
            'user_id'=>Auth::user()->id,
            'collab'=>$request->has('collab')
        ]);


        return response()->json(['status'=>'success', 'message'=>'Acordes creados']);
    }

    public function destroyIndex(){
        return view('modules.chord.destroyIndex');
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