<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 20.09.15
 * Time: 15:59
 */

namespace App\Miosk\Manager;

use App\Visitor;
use Illuminate\Support\Facades\Cookie;

class VisitorManager {

    public static function registerVisitor() {
        $visitorId = uniqid();
        Cookie::queue('visitor_id', $visitorId, 2628000);
        $visitor = new Visitor();
        $visitor->visitor_id = $visitorId;
        $visitor->last_visit = new \DateTime();
        $visitor->banned = false;
        $visitor->save();
        return $visitorId;
    }

    public static function getVisitor($visitorId) {
        return Visitor::where('visitor_id', '=', $visitorId)->first();
    }

    public static function updateLastVisit($visitorId) {
        $visitor = VisitorManager::getVisitor($visitorId);
        $visitor->last_visit = new \DateTime();
        $visitor->save();
    }

    public static function createVisitor($visitorId) {
        $visitor = new Visitor();
        $visitor->visitor_id = $visitorId;
        $visitor->last_visit = new \DateTime();
        $visitor->banned = false;
        $visitor->save();
        return $visitorId;
    }

    public static function getVisitorById($visitorId) {
        return Visitor::where('visitor_id', '=', $visitorId)->first();
    }
}