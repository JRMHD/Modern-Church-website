<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DonationReceived;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:1',
            'message' => 'nullable|string',
        ]);

        // Store the donation data in the database
        $donation = Donation::create($validated);

        // Send an email notification to the owner
        Mail::to('prophetjeffter@gmail.com')->send(new DonationReceived($donation));

        // Return a success response
        return response()->json(['message' => 'Thank you for your donation!'], 200);
    }
}
