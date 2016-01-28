<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 28.01.16
 * Time: 10:02
 */

namespace App\Miosk\Manager;


use Illuminate\Support\Facades\Mail;

class OrderManager {

    static function createOrder($user, $destination, $items) {
        $order = \App\Order::create([
            'destination' => $destination,
            'user_id' => $user->id
        ]);

        foreach ($items as $item) {
            $order->products()->attach($item['productId'], ['quantity' => $item['quantity']]);
        }

        return $order;
    }

    static function sendOrderNotificationToAdmin($order) {
        $user = $order->user;
        Mail::send('emails.order_notification', compact('user', 'order'), function ($m) {
            $m->from('janiceschafer.ch@gmail.com', 'miosk');

            $m->to('noethiger.mike@gmail.com')->subject('Bestellung - Miosk');
        });
    }
}