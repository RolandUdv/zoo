<?php
// How to make a new middleware and set it up, follow Adnan Mumtaz's guide
// https://stackoverflow.com/questions/42473005/laravel-middleware-for-admin-or-auth-in-laravel-5
namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        if (\Auth::user()->isStaff == '1') {
        return $next($request);
    }
    return redirect('/');
    }
}

