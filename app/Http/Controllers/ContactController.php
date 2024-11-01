<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Save data to database
        $contact = Contact::create($request->only(['name', 'email', 'phone', 'subject', 'message']));

        // Send email to website owner
        Mail::send('emails.contact', ['contact' => $contact], function ($message) {
            $message->to('prophetjeffter@gmail.com')
                ->subject('New Contact Form Submission');
        });

        return response()->json(['message' => 'Thank you for your message! We will get back to you shortly.'], 200);
    }
}
