<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PersonalTaskMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
    if (auth()->check()) {
        // Get the authenticated user's ID
        $userId = auth()->id();
        
        // Store user ID in the session
        session()->put('user_id', $userId);
        
        // Retrieve the user ID from the session
        $userIdFromSession = session()->get('user_id');
        
        // Dump and die the session data
        // dd(session()->all(), $userIdFromSession);
    } else {
        // If user is not authenticated, you might want to redirect them to the login page
        return redirect()->route('login');
    }

        
        // return $next($request);
    }
      
    }