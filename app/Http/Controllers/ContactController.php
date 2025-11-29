<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index', [
            'title' => 'Contact Us - HomeFreshPainters',
            'contact_info' => [
                'phone' => '+1 (555) 123-4567',
                'email' => 'info@homefreshpainters.com',
                'address' => '123 Main Street, Your City, State 12345',
                'hours' => 'Mon-Fri: 8AM-6PM, Sat: 9AM-4PM'
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
            'service' => 'nullable|string|max:255'
        ]);

        // TODO: Send email notification
        // TODO: Save to database
        
        return redirect()->route('contact')->with('success', 'Thank you for your message! We will contact you soon.');
    }
}
