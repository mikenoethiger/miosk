<?php

namespace App\Http\Middleware;

use App\Miosk\Manager\ClientIdentificationManager;
use App\Visitor;
use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class ClientIdMiddleware
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
        $clientId = Request::cookie('client_id');
        Log::info($clientId);
        Log::info(Request::hasCookie('client_id'));

        if ($clientId == null) {
            ClientIdentificationManager::generateCookie();
        }

        return $next($request);
    }
}
