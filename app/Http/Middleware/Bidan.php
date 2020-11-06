<?php

namespace App\Http\Middleware;

use Closure;

class Bidan
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

        // if (auth()->guard('bidan')) {
        //     redirect()->route('authBidan');
        // } else if (auth()->guard('ibu')) {
        //     redirect()->route('authIbu');
        // } else {
        //     redirect()->route('login');
        // }
        if (!auth()->guard('bidan')->check()) {
            redirect()->route('login');
        }
        return $next($request);
    }
}
