<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 20.09.15
 * Time: 15:59
 */

namespace App\Miosk\Manager;

use App\Visitor;
use Illuminate\Support\Facades\Request;

class ClientIdentificationManager {

    public static function generateId() {
        $clientId = uniqid();
        Cookie::queue('client_id', $clientId);
    }

    public static function createVisitor() {
        $clientId = Request::cookie('client_id');
        $visitor = new Visitor();
        $visitor->client_id = $clientId;
        $visitor->last_visit = new \DateTime();
        $visitor->banned = false;
        $visitor->save();
    }
}