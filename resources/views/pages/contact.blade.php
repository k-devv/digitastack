@extends('layouts.app')

@section('title', 'Contact - ' . config('app.name'))
@section('description', 'Get in touch with DigitalStack. Questions, feedback, or collaboration — send a message.')

@section('content')
<main class="page-content">
    <div class="container">
        <h1>Contact</h1>
        <p>Have a question, suggestion, or want to collaborate? Fill out the form below and I'll get back to you.</p>

        @if(session('success'))
            <div style="background: #f0fdf4; border: 1px solid #bbf7d0; padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem; color: #166534;">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/contact" style="margin-top: 1.5rem;">
            @csrf
            <div style="margin-bottom: 1.25rem;">
                <label for="name" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Name</label>
                <input type="text" id="name" name="name" required placeholder="Your name" style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem;">
            </div>
            <div style="margin-bottom: 1.25rem;">
                <label for="email" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Email</label>
                <input type="email" id="email" name="email" required placeholder="you@example.com" style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem;">
            </div>
            <div style="margin-bottom: 1.25rem;">
                <label for="subject" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Subject</label>
                <select id="subject" name="subject" style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem;">
                    <option value="general">General Question</option>
                    <option value="feedback">Feedback</option>
                    <option value="collaboration">Collaboration</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div style="margin-bottom: 1.25rem;">
                <label for="message" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Message</label>
                <textarea id="message" name="message" required placeholder="Your message..." style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem; min-height: 150px; resize: vertical;"></textarea>
            </div>
            <button type="submit" style="background: var(--accent); color: #fff; padding: 0.75rem 1.5rem; border: none; border-radius: 6px; font-size: 1rem; font-weight: 600; cursor: pointer; font-family: var(--font);">Send Message</button>
        </form>
    </div>
</main>
@endsection
