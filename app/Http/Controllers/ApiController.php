<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    public function alarm() {
        $user = Auth::user();
        $prename = $user->prename;
        $name = $user->name;
        $email = $user->email;

        Mail::send('emails.alarm', compact('prename', 'name', 'email'), function ($m) {
            $m->from('janiceschafer.ch@gmail.com', 'miosk');

            $m->to('noethiger.mike@gmail.com')->subject('Bitte Kiosk Öffnen');
        });
    }
}