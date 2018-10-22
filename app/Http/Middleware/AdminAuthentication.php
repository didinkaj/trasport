<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {
            $role = Auth::user()->role;
    
            if ($role !== 0)
            {
        
                if ($role == 1)
                {
            
                   return redirect('user/home');
            
                } else {
            
                    if ($role == 2)
                    {
                        return  redirect('driver/home');
                
                    } else {
                
                        abort('401');
                
                    }
            
                }
        
            }
        }
        return $next($request);
    }
    
    
}
