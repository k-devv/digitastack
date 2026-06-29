<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - {{ config('app.name') }}</title>
    <meta name="description" content="Get in touch with DigitalStack. Questions, feedback, or collaboration — send a message.">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        :root {
            --bg: #ffffff; --text: #1a1a2e; --muted: #64748b; --accent: #2563eb;
            --accent-hover: #1d4ed8; --border: #e2e8f0; --surface: #f8fafc; --max-w: 800px;
            --font: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        body { font-family: var(--font); color: var(--text); background: var(--bg); line-height: 1.7; }
        a { color: var(--accent); text-decoration: none; }
        .container { max-width: var(--max-w); margin: 0 auto; padding: 0 1.5rem; }
        .form-group { margin-bottom: 1.25rem; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 0.25rem; font-size: 0.875rem; }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%; padding: 0.625rem 0.75rem; border: 1px solid var(--border);
            border-radius: 6px; font-family: var(--font); font-size: 1rem; color: var(--text);
        }
        .form-group input:focus, .form-group textarea:focus { outline: 2px solid var(--accent); border-color: transparent; }
        .form-group textarea { min-height: 150px; resize: vertical; }
        .btn {
            display: inline-block; background: var(--accent); color: #fff; padding: 0.75rem 1.5rem;
            border: none; border-radius: 6px; font-size: 1rem; font-weight: 600; cursor: pointer;
            font-family: var(--font);
        }
        .btn:hover { background: var(--accent-hover); color: #fff; }
    </style>
</head>
<body>
    @include('components.header')
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
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="you@example.com">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject">
                        <option value="general">General Question</option>
                        <option value="feedback">Feedback</option>
                        <option value="collaboration">Collaboration</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required placeholder="Your message..."></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </main>
    @include('components.footer')
</body>
</html>
