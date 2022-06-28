<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck {

      public function handle(Request $request, Closure $next) {
        if (!session()->has('LoggedUser') && ($request->path() != 'auth/login' && $request->path())) {
            return redirect('auth/login')->with('fail', 'Faca Login');
        }
        if (session()->has('LoggedUser') && ($request->path() == 'auth/login')) {

            return back();
        }
        return $next($request);
    }

}
