<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SaveLastPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


     
    public function handle(Request $request, Closure $next): Response
    {
        $lastVisited = session('last_visited');

        
        if ($request->isMethod('get') && !$request->ajax() && $request->fullUrl() != session('last_visited')) {
            session(['last_visited' => $request->fullUrl()]);
        }

       
        view()->share('lastVisited', $lastVisited);

        return $next($request);
    }
    
}