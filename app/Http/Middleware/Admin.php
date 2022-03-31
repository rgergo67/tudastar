<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if (! auth()->check() || auth()->user()->email !== 'rgergo67@gmail.com') {
            redirect('/');
        }

        return $next($request);
    }
}
