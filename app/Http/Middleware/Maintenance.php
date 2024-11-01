<?php

namespace App\Http\Middleware;

use App\Models\WebSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Maintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(WebSetting::find(1)->maintenance){
            return redirect()->route('maintenance');
        }
        return $next($request);
    }
}
