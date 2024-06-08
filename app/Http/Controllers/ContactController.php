<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    public function send(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|min:4',
                'email' => 'required|email',
                'subject' => 'required|min:4',
                'message' => 'required',
            ]);

            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Mail::to('purehub@outlook.com')->send(new ContactFormMail($details));

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            // Optionally, you can handle the exception and provide feedback to the user
            return back()->withErrors(['error' => 'There was an error sending your message. Please try again later.']);
        }
    }
}
