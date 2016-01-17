<?php

namespace App\Http\Middleware;

use App\Miosk\Manager\VisitorManager;
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
        $visitorId = Request::cookie(VisitorManager::VISITOR_COOKIE_IDENTIFIER);

        // Register the visitor if the visitorId is not set yet
        if ($visitorId == null) {
            $visitorId = VisitorManager::registerVisitor();
        }

        // Update last visit of current visitor to current date time
        VisitorManager::updateLastVisit($visitorId);

        return $next($request);
    }
}
