<?php

namespace App\Http\Controllers\Practice;

use App\Http\Controllers\Controller;
use App\Models\Practice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PracticeRequest;
class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modules.Practice.index');
    }

    public function userIndex(){
        $practices = Practice::where('user_id', Auth::user()->id)->get();
        $userPractices = Practice::whereHas('userParticipants', function($q){
            $q->where('user_id', Auth::user()->id);
        })->get();
        return view('modules.Practice.userIndex', ['practices'=>$practices, 'userPractices'=>$userPractices]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PracticeRequest $request)
    {
        if(!$request->items){
            return response()->json(['status'=>'wrong', 'message'=>'Debes incluir 1 o mas items']);
        }

        if($request->participants){
            $practice = Practice::create(['user_id'=>Auth::user()->id,'name'=>$request->name, 'participants'=>$request->participants, 'start_date'=>$request->performDate, 'start_hour'=>$request->startHour, 'end_hour'=>$request->endHour, 'location'=>$request->location]);
        }elseif($request->userParticipants){
            $practice = Practice::create(['user_id'=>Auth::user()->id,'name'=>$request->name, 'start_date'=>$request->performDate, 'start_hour'=>$request->startHour, 'end_hour'=>$request->endHour, 'location'=>$request->location]);
            $userParticipants = [];
            foreach(json_decode($request->userParticipants) as $participant){
                array_push($userParticipants, $participant->id);
            }
            $practice->userParticipants()->sync($userParticipants);
        }else{
            return response()->json(['message'=>'Debes incluir participantes','status'=>'wrong']);
        }
        
        $items = json_decode($request->items);
        $syncData = [];

        foreach ($items as $item) {
            $syncData[$item->id] = ['quantity' => $item->quantity];
        }

        $practice->items()->sync($syncData);
        return json_encode(['message'=>'Ensayo Creado', 'status'=>'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}