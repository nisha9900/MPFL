<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if(auth()->user()->is_admin==1){
    //         return $next($request);
    //     }else{
    //         return redirect('home')->with('error','you have no admin access');
    //     }
      
    // }
    public function handle(Request $request, Closure $next)
    {
   



   if (auth()->check()) {
    Log::info('User is authenticated.');

    if (auth()->user()->role !== 'admin') {
        Log::info('Redirecting: User not authenticated or not admin');

        // Redirect the user to the home page with an error message
        return redirect('/user/tasks')->with('error', 'You do not have access to this section.');
    }

    // If the user is an admin, proceed with the request
    Log::info('User is an admin, proceeding with request.');
    return $next($request);
} else {
    Log::info('User is not authenticated, redirecting.');
    // Redirect the user to a login page or somewhere appropriate
    return redirect('/login')->with('error', 'You must be logged in to access this section.');
}
    
}
}