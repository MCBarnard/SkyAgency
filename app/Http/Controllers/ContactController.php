<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create() {
//        Mail::send('emails.application_mail', $data, function ($message) use ($liveEmailAddress, $attachment) {
//            $message->to($liveEmailAddress, 'PayFast Info')->subject('New PayFast Integration');
//            $message->from($liveEmailAddress, 'Marketing Website')->attach($attachment->getRealPath(), [
//                'as' => $attachment->getClientOriginalName(),
//                'mime' => $attachment->getMimeType()
//            ]);
//            Log::debug('Email sent successfully');
//        });
        return "hit";
    }
}
