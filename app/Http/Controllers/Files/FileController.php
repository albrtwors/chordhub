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
use App\Notifications\FileNotification;
use App\Models\User;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
            'user_id'=>Auth::user()->id

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
        $file->update([
            'name'=>$request->list_name,
            
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
        File::find($id)->delete();
        return response()->json(['status'=>'success','message'=>'Cancionero Eliminado']);
    }

    public function searchByName(Request $search){
        return SearchListController::SearchLists($search);
    }
}