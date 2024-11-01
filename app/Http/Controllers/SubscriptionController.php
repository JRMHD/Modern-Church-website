<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'mcemail' => 'required|email|unique:subscriptions,email'
        ]);

        // Save email to the database
        $subscription = Subscription::create([
            'email' => $request->input('mcemail')
        ]);

        // Send a confirmation email to the user
        Mail::to($subscription->email)->send(new \App\Mail\SubscriptionConfirmationMail($subscription));

        // Return JSON response for AJAX handling
        return response()->json(['message' => 'Thank you for subscribing!'], 200);
    }
}
