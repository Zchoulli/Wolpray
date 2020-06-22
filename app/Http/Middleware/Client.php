<?php

/**
   * @name:        Client
   * @author:      Zaid - Patrik - Henry
   * @description: Each functions in web.php belongs to user role
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App\Http\Middleware;

use Auth;
use Closure;

class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == "manager") {
            return redirect()->route('manager');
        }

        if (Auth::user()->role == "admin") {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == "client") {
            return $next($request);
        }
    }

}
