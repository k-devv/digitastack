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
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert-error">
                <ul style="margin: 0; padding-left: 1.25rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/contact" style="margin-top: 1.5rem;">
            @csrf

            <div style="position: absolute; left: -9999px; opacity: 0;" aria-hidden="true">
                <label for="website">Leave this blank</label>
                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" required placeholder="Your name" value="{{ old('name') }}" class="form-input">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" required placeholder="you@example.com" value="{{ old('email') }}" class="form-input">
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <select id="subject" name="subject" class="form-select">
                    <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>General Question</option>
                    <option value="feedback" {{ old('subject') == 'feedback' ? 'selected' : '' }}>Feedback</option>
                    <option value="collaboration" {{ old('subject') == 'collaboration' ? 'selected' : '' }}>Collaboration</option>
                    <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            @php
                $num1 = rand(1, 10);
                $num2 = rand(1, 10);
                session(['captcha_num1' => $num1, 'captcha_num2' => $num2]);
            @endphp
            <div class="form-group">
                <label for="captcha" class="form-label">What is {{ $num1 }} + {{ $num2 }}? (anti-spam)</label>
                <input type="number" id="captcha" name="captcha" required placeholder="{{ $num1 }} + {{ $num2 }} = ?" class="form-input">
            </div>

            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" required placeholder="Your message..." class="form-textarea">{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</main>
@endsection
