<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class UserAuthentication
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
            
            if ($role !== 1)
            {
                if ($role == 0)
                {
                   return redirect('/home');
                } else {
                    
                    if ($role == 2)
                    {
                      return  redirect('user/driver');
                        
                    } else {
                        
                        abort('401');
                        
                    }
                    
                }
                
            }
            
        }
        
        return $next($request);
    }
    
    
}
