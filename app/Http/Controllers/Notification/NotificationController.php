<?php

namespace App\Http\Controllers\Notification;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Auth::user()->unreadNotifications;
        return view('modules.Notification.UserNotifications', compact('notifications'));
    }

    public function read($id, Request $req){
        $notification = Auth::user()->unreadNotifications->where('id', $id) ->first();
        $notification->markAsRead();

      
        return response()->json(['status'=>'success', 'message'=>'Notificación omitida']);
      
       
    }

    public function readAsGet($id){
        $notification = Auth::user()->unreadNotifications->where('id', $id) ->first();
        $notification->markAsRead();

        return redirect()->to($notification->data['route']);
   
       
    }

    public function readAll(){
        $notifications = Auth::user()->unreadNotifications;
        $notifications->markAsRead();
        return redirect()->back();
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