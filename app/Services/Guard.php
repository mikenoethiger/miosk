<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 14.12.15
 * Time: 11:02
 */

namespace App\Services;

use App\Miosk\Manager\VisitorManager;
use Illuminate\Support\Facades\Cookie;

class Guard {

    private $visitorId;

    public function __construct($visitorId) {
        $this->visitorId = $visitorId;
        $this->registerVisitorIfNotRegistered();
        $this->updateLastVisit();
    }

    public function getVisitor() {
        return VisitorManager::getVisitorById($this->visitorId);
    }

    private function updateLastVisit() {
        $visitor = $this->getVisitor();
        $visitor->last_visit = new \DateTime();
        $visitor->save();
    }

    private function registerVisitorIfNotRegistered() {
        if ($this->visitorId == null) {
            $this->visitorId = uniqid();
            Cookie::queue('visitor_id', $this->visitorId, 2628000);
            VisitorManager::createVisitor($this->visitorId);
        }
    }
}