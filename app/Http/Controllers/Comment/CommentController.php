<?php

namespace App\Http\Controllers\Comment;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use App\Notifications\CommentNotification;
use App\Notifications\CommentOwnerNotification;

class CommentController extends Controller
{
        function getType($type){
        switch($type){
            case 'song':
                return 'App\Models\Song';
                break;
            case 'file':
                return 'App\Models\File';
                break;
            case 'chord';
                return 'App\Models\Chord';
                break;
            default:
                return 'song';
                break;

        }
    }
    /**
     * 
     * Display a listing of the resource.
     */
  public function getCommentsPriv($id, $type)
{
    $comments = Comment::where('commentable_id', $id)
        ->whereNull('parent_id')
        ->where('commentable_type', $type)
        ->with([
            'user' => fn($q) => $q->with('image'),
            'responses' => fn($q) => $q->with([
                'user' => fn($q) => $q->with('image'),
                'responses' => fn($q) => $q->with([
                    'user' => fn($q) => $q->with('image'),
                    'responses' => fn($q) => $q->with([
                        'user' => fn($q) => $q->with('image'),
                        'responses' => fn($q) => $q->with([
                            'user' => fn($q) => $q->with('image'),
                            'responses' => fn($q) => $q->with([
                                'user' => fn($q) => $q->with('image'),
                                'responses' => fn($q) => $q->with([
                                    'user' => fn($q) => $q->with('image'),
                                    'responses' => fn($q) => $q->with([
                                        'user' => fn($q) => $q->with('image'),
                                        
                                    ])
                                ])
                            ])
                        ])
                    ])
                ])
            ])
        ])
        ->get();

    return $comments;
}

public function getComments($id, $type)
{
    $comments = Comment::where('commentable_id', $id)
        ->whereNull('parent_id')
        ->where('commentable_type', $this->getType($type))
        ->with([
            'user' => fn($q) => $q->with('image'),
            'responses' => fn($q) => $q->with([
                'user' => fn($q) => $q->with('image'),
                'responses' => fn($q) => $q->with([
                    'user' => fn($q) => $q->with('image'),
                    'responses' => fn($q) => $q->with([
                        'user' => fn($q) => $q->with('image'),
                        'responses' => fn($q) => $q->with([
                            'user' => fn($q) => $q->with('image'),
                            'responses' => fn($q) => $q->with([
                                'user' => fn($q) => $q->with('image'),
                                'responses' => fn($q) => $q->with([
                                    'user' => fn($q) => $q->with('image'),
                                    'responses' => fn($q) => $q->with([
                                        'user' => fn($q) => $q->with('image'),
                                       
                                    ])
                                ])
                            ])
                        ])
                    ])
                ])
            ])
        ])
        ->get();

    return $comments;
}
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
        $comment->commentable->user->notify(new CommentOwnerNotification($comment));

        $newCommentList = $this->getCommentsPriv($request->postid, $request->postype);
        return response()->json(['status'=>'success', 'comments'=>response()->json($newCommentList)]);
        // return redirect()->back();
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