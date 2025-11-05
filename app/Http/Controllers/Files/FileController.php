<?php

namespace App\Http\Controllers\Files;
use App\Http\Requests\FileRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Search\SearchListController;
use App\Models\File;
use App\Http\Requests\FileUpdateRequest;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events\FileEvent;
use App\Models\Tonality;
use App\Notifications\FileNotification;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class FileController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */  
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('can:songlists.create', only: ['create']),
            new Middleware('can:songlists.index', only: ['index']),
            new Middleware('can:songlists.edit', only: ['edit']),
            new Middleware('can:songlists.destroy', only: ['indexDeletes']),
            new Middleware('can:songlists.edit', only: ['indexEdits']),
           
           
        ];
    }
    public function index()
    {
        $lists = File::all();
        return view('modules.List.lists', compact('lists'));
    }
    public function indexEdits(){
        return view('modules.List.modify');
    }
    public function indexDelete(){
        return view('modules.List.delete');
    }

    public function songInFile($file_id, $song_id){
        $file = File::find($file_id);
        $song = Song::find($song_id);
        $tonalities=Tonality::all();
        
        return view('modules.List.songInFile', compact(['file', 'song','tonalities']));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $songs = Song::all();
        return view("modules.List.create", ["songs"=>$songs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FileRequest $request)
    {
        
        $file = File::create([
            'name'=>$request->listname,
            'user_id'=>Auth::user()->id,
            'collab'=>$request->collab??0

        ]);   
        
        foreach ($request->songs as $index => $songId) {
            $syncData[$songId] = ['list_order' => $index + 1];
            

        }
        
        if($syncData){
            $file->songs()->sync($syncData);
            
        }

        
        $file->songs()->sync($request->songs);

        $users = User::all()->except(Auth::user()->id);
        foreach($users as $user){
            $user->notify(new FileNotification($file));
        }
        
        return response()->json(['status'=>'success', 'message'=>'Cancionero creado']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        Visit::create(['user_id'=>Auth::user()->id,'visitable_type'=>'App\Models\File','visitable_id'=>$id]);
        $list = File::find($id);
        $list_songs = $list->songs;
        
       
        $comments = $list->comments()->whereNull('parent_id')->get();
        return view('modules.List.list', compact(['list', 'list_songs', 'comments']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $list = File::find($id);
        $list_songs = $list->songs;
        $songs = Song::all();
        return view('modules.List.modify_list', compact(['list','list_songs', 'songs']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $file = File::find($id);

        if (! Gate::allows('modify-file', $file)) {
            return response()->json(['status'=>'wrong', 'message'=>'No autorizado']);
        }
        
        $file->update([
            'name'=>$request->list_name,
            'collab'=>$request->collab??0
        ]);

        
        if(!json_decode($request->songs)){
            $file->songs()->detach();
        }else{
            foreach (json_decode($request->songs) as $index => $songId) {
            $syncData[$songId] = ['list_order' => $index + 1];
            

            }
        
            if($syncData){
                $file->songs()->sync($syncData);
                
            }
        
            $file->songs()->sync(json_decode($request->songs));
        }
        
        return response()->json(['status'=>'success', 'message'=>'Cambios realizados']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file = File::find($id);

        if (! Gate::allows('delete-file', $file)) {
            return response()->json(['status'=>'wrong', 'message'=>'No autorizado']);
        }
        
        $file->delete();
        return response()->json(['status'=>'success','message'=>'Cancionero Eliminado']);
    }

    public function searchByName(Request $search){
        return SearchListController::SearchLists($search);
    }
}