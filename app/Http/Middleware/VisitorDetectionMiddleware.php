<?php

namespace App\Http\Middleware;

use App\Miosk\Manager\VisitorDetector;
use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class VisitorDetectionMiddleware
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
        $clientId = Request::cookie('visitor_id');
        Log::info($clientId);
        Log::info(Request::hasCookie('visitor_id'));

        if ($clientId == null) {
            VisitorDetector::registerVisitor();
        }

        return $next($request);
    }
}
