<?php

namespace App\Http\Controllers\Song;

use App\Events\SongEvent;
use App\Models\Song;
use App\Models\Comment;
use App\Models\Visit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SongRequest;
use App\Models\Genre;
use App\Http\Controllers\Search\SearchSongController;
use App\Models\Author;
use App\Http\Requests\SongModifyRequest;
use App\Models\Log;
use App\Models\Tonality;
use App\Models\User;
use App\Notifications\SongNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class SongController extends Controller implements HasMiddleware
{

    use Notifiable;
    /**
     * Display a listing of the resource.
     */

    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('can:songs.create', only: ['create']),
            new Middleware('can:songs.index', only: ['index']),
            new Middleware('can:songs.edit', only: ['edit']),
            new Middleware('can:songs.destroy', only: ['indexDeletes']),
            new Middleware('can:songs.edit', only: ['indexEdits']),
           
        ];
    }
    public function index()
    {
        return view("modules.Song.songs");
    }

    public function indexEdits()
    {
        return view('modules.Song.modify');
    }
    public function indexDeletes()
    {
        return view('modules.Song.delete');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        $songs = Song::all();
        return view("modules.Song.create", compact('genre', 'songs'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SongRequest $request)
    {


        $author=Author::where('name', $request->author)->first();
        
        if(!$author){
            $author = Author::create(['name'=>$request->author]);
        }
        
        $song = Song::create([
            'name'=>$request->name,
            'keywords'=>$request->keywords,
            'structure'=>$request->structure,
            'collab'=>$request->has('collab'),
            'user_id'=>Auth::user()->id,
            'author_id'=>$author->id,
            'genre_id'=>$request->genre
        ]);


        $user = User::all()->except($song->user_id);
        foreach($user as $u){
            $u->notify(new SongNotification($song));

        }

        if($request->file('audio')){
            $audio = $request->file('audio');
            $audioUrl = $audio->store('songs', 'public');
            $audioPath = Storage::url($audioUrl);
            $song->audio()->create(['url'=>$audioPath, 'audioble_type'=>'App\Models\Song', 'audioble_id'=>$song->id]);
        }

        if($request->file('pfp')){
            $image = $request->file('pfp');
            $url = $image->store('songimages', 'public');
            $path = Storage::url($url);
            $song->image()->create(['url'=>$path, 'imageable_type'=>'App\Models\Song', 'imageable_id'=>$song->id]);
        }

        Log::create(['name'=>Auth::user()->name. ' ha creado la canción '.$song->name,'user_id'=>Auth::user()->id]);
        event(new SongEvent($song));
        return response()->json(['status'=>'success', 'message'=>'Canción creada']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Visit::create(['user_id'=>Auth::user()->id,'visitable_type'=>'App\Models\Song','visitable_id'=>$id]);
        Visit::create(['user_id'=>Auth::user()->id,'visitable_type'=>'App\Models\Genre','visitable_id'=>$id]);
        
        $songs = Song::find($id);
        $tonalities = Tonality::all();
        $user = $songs->user;
        $comments = $songs->comments()->whereNull('parent_id')->get() ?? null;
        return view("modules.Song.song", compact(['songs', 'user', 'comments', 'tonalities']));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $genre = Genre::all();
        $song = Song::find($id);
        $songs = Song::all();
        return view('modules.Song.modify_song', compact(['song', 'genre', 'songs']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SongModifyRequest $request, string $id)
    {


       $author=Author::where('name', $request->author)->first();
        

        $song = Song::find($id);
        
        if (! Gate::allows('modify-song', $song)) {
            return response()->json(['status'=>'wrong', 'message'=>'No autorizado']);
        }

        if(!$author){
            $author = Author::create(['name'=>$request->author]);
        }

        $song->update([
            'name'=>$request->name,
            'collab'=>$request->collab,
            'keywords'=>$request->keywords,
            'structure'=>$request->structure,
            'collab'=>$request->has('collab'),
           
            'author_id'=>$author->id,
            'genre_id'=>$request->genre
        ]);
        if($request->file('pfp')){
            $image=$request->file('pfp');
            $url = $image->store('songimages','public');
            $globalUrl = Storage::url($url);
            if($song->image){
                $song->image()->update(['url'=>$globalUrl]);
            }else{
                $song->image()->create(['url'=>$globalUrl]);
            }
            
        }

        if($request->file('audio')){
            if($song->audio){
                $audio = $request->file('audio');
                $audioUrl = $audio->store('songs', 'public');
                $audioPath = Storage::url($audioUrl);
                $song->audio()->update(['url'=>$audioPath, 'audioble_type'=>'App\Models\Song', 'audioble_id'=>$song->id]);
            }
            else{
                $audio = $request->file('audio');
                $audioUrl = $audio->store('songs', 'public');
                $audioPath = Storage::url($audioUrl);
                $song->audio()->create(['url'=>$audioPath, 'audioble_type'=>'App\Models\Song', 'audioble_id'=>$song->id]);
            }
            
        }        

        Log::create(['name'=>Auth::user()->name. ' ha modificado la canción '.$song->name,'user_id'=>Auth::user()->id]);
        return response()->json(['status'=>'success', 'message'=>'Canción modificada']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = Song::find($id);
        if (! Gate::allows('delete-song', $song)) {
            return response()->json(['status'=>'wrong', 'message'=>'No autorizado']);
        }
        Log::create(['name'=>Auth::user()->name. ' ha eliminado la canción '.$song->name,'user_id'=>Auth::user()->id]);
        $song->delete();
        
        return response()->json(['status'=>'success', 'message'=>'Cancion Eliminada']);
    }


    //searcher
    public function searchByNameAndGenre(Request $request)
    {
        
       return SearchSongController::SearchSongs($request, 'modules.Song.songs');
    }

    public function getSongsAPI(){
        return response()->json(Song::all());
    }
}