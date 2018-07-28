<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            if (Auth::guest()) {
                
                return view('auth/login');
                
            } else {
                
                if (Auth::user()->role === 0)
                {
                    return redirect('/home');
                    
                } elseif (Auth::user()->role === 1) {
                    
                    return redirect('/user/home');
                    
                } elseif (Auth::user()->role === 2) {
                    
                    return redirect('/driver/home');
                    
                } else {
                    
                    return redirect('auth/login');
                    
                }
                
            }
            
            
        }
        
        return $next($request);
    }
}
