@extends('layouts.app')

@section('title', 'Contact - ' . config('app.name'))
@section('description', 'Get in touch with DigitalStack. Questions, feedback, or collaboration — send a message.')

@section('content')
<main class="page-content">
    <div class="container">
        @include('components.breadcrumbs', ['breadcrumbs' => ['Contact' => null]])
        <h1>Contact</h1>
        <p>Have a question, suggestion, or want to collaborate? Fill out the form below and I'll get back to you.</p>

        @if(session('success'))
            <div style="background: #f0fdf4; border: 1px solid #bbf7d0; padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem; color: #166534;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div style="background: #fef2f2; border: 1px solid #fecaca; padding: 1rem; border-radius: 6px; margin-bottom: 1.5rem; color: #991b1b;">
                <ul style="margin: 0; padding-left: 1.25rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/contact" style="margin-top: 1.5rem;">
            @csrf

            {{-- Honeypot anti-spam field — hidden from humans, bots will fill it --}}
            <div style="position: absolute; left: -9999px; opacity: 0;" aria-hidden="true">
                <label for="website">Leave this blank</label>
                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div style="margin-bottom: 1.25rem;">
                <label for="name" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Name</label>
                <input type="text" id="name" name="name" required placeholder="Your name" value="{{ old('name') }}" style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem;">
            </div>
            <div style="margin-bottom: 1.25rem;">
                <label for="email" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Email</label>
                <input type="email" id="email" name="email" required placeholder="you@example.com" value="{{ old('email') }}" style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem;">
            </div>
            <div style="margin-bottom: 1.25rem;">
                <label for="subject" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Subject</label>
                <select id="subject" name="subject" style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem;">
                    <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>General Question</option>
                    <option value="feedback" {{ old('subject') == 'feedback' ? 'selected' : '' }}>Feedback</option>
                    <option value="collaboration" {{ old('subject') == 'collaboration' ? 'selected' : '' }}>Collaboration</option>
                    <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            {{-- Math captcha --}}
            @php
                $num1 = rand(1, 10);
                $num2 = rand(1, 10);
                session(['captcha_num1' => $num1, 'captcha_num2' => $num2]);
            @endphp
            <div style="margin-bottom: 1.25rem;">
                <label for="captcha" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">What is {{ $num1 }} + {{ $num2 }}? (anti-spam)</label>
                <input type="number" id="captcha" name="captcha" required placeholder="{{ $num1 }} + {{ $num2 }} = ?" style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem;">
            </div>

            <div style="margin-bottom: 1.25rem;">
                <label for="message" style="display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem;">Message</label>
                <textarea id="message" name="message" required placeholder="Your message..." style="width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border); border-radius: 6px; font-family: var(--font); font-size: 1rem; min-height: 150px; resize: vertical;">{{ old('message') }}</textarea>
            </div>
            <button type="submit" style="background: var(--accent); color: #fff; padding: 0.75rem 1.5rem; border: none; border-radius: 6px; font-size: 1rem; font-weight: 600; cursor: pointer; font-family: var(--font);">Send Message</button>
        </form>
    </div>
</main>
@endsection
