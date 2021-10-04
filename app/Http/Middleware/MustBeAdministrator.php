<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdministrator
{
    /**
     * Check whether the current authenticated user are an
     * Administrator or not, then Handle the request as needed.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()?->username !== 'cameronmiller') {
            return redirect('/')->with('error','403 | You are not allowed to view this resource.');
        }
        return $next($request);
    }
}
