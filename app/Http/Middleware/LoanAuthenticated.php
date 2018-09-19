<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class LoanAuthenticated
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
        if( Auth::check() )
        {
            // if user is not admin take him to his dashboard
            if ( Auth::user()->isLoan() ) {
                return redirect(route('loan'));
            }

            // allow admin to proceed with request
            else if ( Auth::user()->isDalali() ) {
                return $next($request);
            }
        }

        abort(404);  // for other user throw 404 error
    }
}
