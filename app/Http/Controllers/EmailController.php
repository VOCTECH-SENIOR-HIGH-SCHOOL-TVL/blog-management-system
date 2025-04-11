<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        \Log::info('Request Data:', $request->all());

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
        ];

        \Log::info('Data Array:', $data);

        Mail::send('email-template', $data, function($message) use ($data) {
            $message->to(['alvarezjustine114@gmail.com'])
                    ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
