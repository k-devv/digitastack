<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about', ['breadcrumbs' => ['About' => null]]);
    }

    public function contact()
    {
        return view('pages.contact', ['breadcrumbs' => ['Contact' => null]]);
    }

    public function contactSubmit(Request $request)
    {
        // Honeypot check — if filled, it's a bot
        if ($request->filled('website')) {
            return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
        }

        // Math captcha check
        $num1 = session('captcha_num1');
        $num2 = session('captcha_num2');
        $expected = $num1 + $num2;

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required|string|max:5000',
            'captcha' => "required|integer|eq:{$expected}",
        ]);

        // Send email
        $subjectMap = [
            'general' => 'General Question',
            'feedback' => 'Feedback',
            'collaboration' => 'Collaboration Request',
            'other' => 'Other',
        ];

        $emailSubject = $subjectMap[$validated['subject']] ?? 'Contact Form Submission';
        $recipient = config('contact.email', 'hello@digitalstack.co.ke');

        Mail::raw("Name: {$validated['name']}\nEmail: {$validated['email']}\nSubject: {$emailSubject}\n\n{$validated['message']}", function ($message) use ($validated, $emailSubject, $recipient) {
            $message->to($recipient)
                    ->subject("DigitalStack Contact: {$emailSubject}")
                    ->replyTo($validated['email'], $validated['name']);
        });

        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function search()
    {
        return view('pages.search', ['breadcrumbs' => ['Search' => null]]);
    }

    public function privacy()
    {
        return view('pages.privacy', ['breadcrumbs' => ['Privacy Policy' => null]]);
    }

    public function cookie()
    {
        return view('pages.cookie', ['breadcrumbs' => ['Cookie Policy' => null]]);
    }

    public function terms()
    {
        return view('pages.terms', ['breadcrumbs' => ['Terms of Service' => null]]);
    }

    public function disclaimer()
    {
        return view('pages.disclaimer', ['breadcrumbs' => ['Disclaimer' => null]]);
    }
}
