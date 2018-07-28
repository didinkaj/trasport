<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

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
            $role = Auth::check()->role;
    
            if ($role !== 0)
            {
        
                if ($role == 1)
                {
            
                    redirect('user/home');
            
                } else {
            
                    if ($role == 1)
                    {
                        redirect('user/home');
                
                    } else {
                
                        abort('401');
                
                    }
            
                }
        
            }
        }
        return $next($request);
    }
    
    
}
