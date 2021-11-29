<?php

namespace App\Http\Middleware;

use Closure;

class Auth
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
        $user = session()->get('user');

        if (empty($user)) {
            return redirect('auth/login');
            //return 'salah nya disini';
        }

        return $next($request);
    }
}
