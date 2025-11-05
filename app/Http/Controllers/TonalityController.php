<?php

namespace App\Http\Controllers;

use App\Models\Tonality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TonalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $tonality = $request->tonality;
        $songId = $request->song_id;
       
        $user = User::find(Auth::user()->id);

      
        $exists = $user->tonalities()->wherePivot('song_id', $songId)->exists();

        if ($exists) {
           DB::table('tonality_user')
            ->where('user_id', $user->id)
            ->where('song_id', $songId)
            ->update(['tonality_id' => $tonality]);
        } else {
           
            $user->tonalities()->attach($tonality, ['song_id' => $songId]);
        }

        return redirect()->back();
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