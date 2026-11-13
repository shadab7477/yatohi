<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'form_name' => 'nullable|string|max:100',
            'username' => 'nullable|string|max:100',
            'name' => 'nullable|string|max:100',
            'form_email' => 'nullable|email|max:150',
            'email' => 'nullable|email|max:150',
            'form_phone' => 'nullable|string|max:50',
            'phone' => 'nullable|string|max:50',
            'form_subject' => 'nullable|string|max:200',
            'subject' => 'nullable|string|max:200',
            'form_message' => 'nullable|string|max:2000',
            'message' => 'nullable|string|max:2000',
        ]);

        $name = $request->input('form_name') ?? $request->input('username') ?? $request->input('name') ?? 'Friend';

        return back()->with('success', "Thank you, {$name}! Your message has been received. We will get back to you shortly.");
    }

    /**
     * Handle newsletter subscription.
     */
    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:150',
        ]);

        return back()->with('newsletter_success', 'Thank you for subscribing to Yogava updates!');
    }
}

