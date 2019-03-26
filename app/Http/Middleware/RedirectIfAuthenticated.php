<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            // for admin
            case 'admin':
            if (Auth::guard($guard)->check()) {
                return redirect()->route('admin.dashboard');
            }
            break;
            // for vendor
            case 'vendor':
            if (Auth::guard($guard)->check()) {
                return redirect()->route('vendor.dashboard');
            }
            break;
            // for customer service
            case 'customerService':
            if (Auth::guard($guard)->check()) {
                return redirect()->route('customerService.dashboard');
            }
            break;
            // for customer
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended('/dashboard');
                }
                break;
        }
        return $next($request);
    }
}
