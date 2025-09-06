<?php

namespace App\Http\Controllers\Comment;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use App\Notifications\CommentNotification;
class CommentController extends Controller
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
    public function store(CommentRequest $request)
    {
        $comment = Comment::create([
            'comment'=>$request->comment,
            'user_id'=>Auth::user()->id,
            'parent_id'=>$request->parentid,
            'commentable_type'=>$request->postype,
            'commentable_id'=>$request->postid

        ]);
        $comment->update(['scroll_position'=>'answer'.$comment->id]);

        if($comment->parent_id){
            $comment->parent->user->notify(new CommentNotification($comment));
        }
        // return response()->json(['status'=>'success', 'message'=>'Comentario subido', 'comment'=>$comment->comment, 'user'=>$comment->user->name]);
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