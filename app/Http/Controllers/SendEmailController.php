<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {
        $details = [
            'title' => 'Register Success',
            'body' => 'Thank you for your registration on our music platform, Enjoy!!!'
        ];

        Mail::to('krisnahendrawijaya@gmail.com')->send(new \App\Mail\NotifyMail($details));
        dd("Email is Sent.");
    }
}
