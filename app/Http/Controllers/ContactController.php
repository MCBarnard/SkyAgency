<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(Request $request) {
        Log::debug(__METHOD__ . " ::BOF");
        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:30',
            'email_num' => 'required|min:5|max:30|string',
            'area' => 'required|string|min:3|max:3',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);
        $receiver = $request->area === 'cpt' ? 'lynette@skyagency.co.za' : 'paul@skyagency.co.za';
        $receiverName = $request->area === 'cpt' ? 'Lynette' : 'Paul';
        $data = [
            'name' => htmlentities($request->name),
            'contact_info' => htmlentities($request->email_num),
            'subject' => htmlentities($request->subject),
            'message' => htmlentities($request->message),
            ];
        Mail::send('layouts.email', ['data' => $data], function ($message) use ($data, $receiver, $receiverName) {
            $message->to($receiver, $receiverName)->subject($data['subject']);
            $message->from('no-reply@skyagency.co.za', 'Sky Website');
        Log::info('Email sent successfully');
        });
        Log::debug(__METHOD__ . " ::BOF");
        return response('Success', 200);
    }
}
