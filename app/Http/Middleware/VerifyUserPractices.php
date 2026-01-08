<?php

namespace App\Http\Middleware;

use App\Models\Practice;
use App\Notifications\PracticeNotification;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class VerifyUserPractices
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $practices = Auth::user()->practices;
        // foreach($practices as $practice){
        //     $date = Carbon::parse($practice->start_date);
            
        //     if ($date->isPast()) {
                
        //     }

        //     if ($date->isToday()) {
        //        $user = Auth::user();
        //        $user->notify(new PracticeNotification($practice));
        //     }
            
        // }
        return $next($request);
    }
}