<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class DriverAuthentication
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
            
            if ($role !== 2)
            {
                if ($role == 0)
                {
                    redirect('/home');
                    
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
