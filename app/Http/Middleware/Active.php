<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Active
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
        if (Auth::user()->status === '0') {
            // return redirect('logout');
            // abort(403);
            Auth::logout();
            return redirect('/home')->with('info', 'your user in not active');
        }
        return $next($request);
    }
}
