<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    /* API STUFF */
    public function getItems(){
        $items = Item::with('image')->get();
        return json_encode(['items'=>$items]);
    }
    public function getItem($name){
        $item = Item::with('image')->where('name', 'like', '%'.$name.'%')->get();
        return json_encode(['items'=>$item]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        return view('modules.Items.index');
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
        //
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