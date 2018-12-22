<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class IsAdmin
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
        if(session('is_admin') === 'admin'){
            return $next($request);
        }
        Session::flash('error', 'Please Login to access these routes');
        return redirect()->route('home');
    }
}
