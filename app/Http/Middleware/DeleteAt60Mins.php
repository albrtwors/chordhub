<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteAt60Mins
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if(session('sign_id') != null){
            $id = session('sign_id');
            $user = User::find($id);

            if ($user && $user->created_at->diffInMinutes() >= 60) {

                $user->code()->delete();
                $user->delete();

                session()->flush();
                return redirect()->to(route('login'));
               
            }
        }

        if(session('restore_mail') != null){
            $mail = session('restore_mail');
            $user = User::where('email', $mail)->first();
            $code = $user->code;
            if ($code && $code->updated_at->diffInMinutes() >= 60) {

                $code->delete();
                session()->flush();
               
            }
        }
        //General comprobation
        $users = User::where('active', 0)->get();
        foreach($users as $u){
            if($u->created_at->diffInMinutes()>=60){
                $u->delete();
            }
        }

        
        return $next($request);
    }
}