<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use App\Mail\ContactAcknowledgementMail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Show the contact form (/contact)
    public function index()
    {
        return view('contact');
    }

    // Show the confirmation page (/contact/confirm)
    public function confirm(ContactRequest $request)
    {
        // Pass the validated input data to the confirmation view
        return view('confirm', ['data' => $request->all()]);
    }

    // Handle the form submission (/contact/store)
    public function store(ContactRequest $request)
    {
        // Check if the user clicked the "Edit" button
        if ($request->has('back')) {
            // Redirect back to the contact form with the input data
            return redirect()->route('contact.index')->withInput($request->all());
        }
        
        // Create the contact record in the database
        Contact::create($request->all());

        // Email details
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send email to the recipient
        Mail::to('lovelybutterfly466@gmail.com')->send(new ContactMail($data));

        // Send acknowledgement email to the sender
        Mail::to($request->email)->send(new ContactAcknowledgementMail($data));

        return redirect()->route('contact.success')->with('success', 'お問い合わせメールが送信されました！');
    }

    // Show the success message page (/contact/store)
    public function success()
    {
        return view('success');
    }
}
