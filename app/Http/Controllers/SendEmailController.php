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

        try {
            Mail::to('krisnahendrawijaya@gmail.com')->send(new NotifyMail($details));
            return "Email is Sent.";
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to send email.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
