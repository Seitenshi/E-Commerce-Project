<?php

namespace App\Http\Middleware ;

use Closure;
use Illuminate\Http\Request;

class PreventBackButton 
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
        $response = $next($request);
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        $response->headers->set('Pragma', 'no-cache');
        
        $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
        
        $response->headers->set('Last-Modified', gmdate('D, d M Y H:i:s') . ' GMT');
        
        $response->headers->set('Cache-Control', 'post-check=0, pre-check=0', false);

        return $response;
    }
}