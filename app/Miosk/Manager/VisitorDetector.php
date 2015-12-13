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

class VisitorDetector {

    public static function registerVisitor() {
        $clientId = uniqid();
        Cookie::queue('visitor_id', $clientId);
        $visitor = new Visitor();
        $visitor->client_id = $clientId;
        $visitor->last_visit = new \DateTime();
        $visitor->banned = false;
        $visitor->save();
    }
}