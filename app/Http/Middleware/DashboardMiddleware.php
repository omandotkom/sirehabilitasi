<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch (Auth::user()->role) {
            case 'admin':
                return redirect()->route('dashboardadmin');
                break;
            case 'asesmen':
                return redirect()->route('dashboardasesmen');
                break;
            case "sosial":
                return redirect()->route('dashboardsosial');
            case "perawat":
                return redirect()->route('dashboardperawat');
            case "psikolog":
                return redirect()->route('dashboardpsikolog');
                break;
        }
        return $next($request);
    }
}
