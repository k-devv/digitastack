<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - {{ config('app.name') }}</title>
    <meta name="robots" content="noindex, nofollow">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        :root {
            --bg: #ffffff; --text: #1a1a2e; --muted: #64748b; --accent: #2563eb;
            --accent-hover: #1d4ed8; --border: #e2e8f0; --surface: #f8fafc;
            --font: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        body { font-family: var(--font); color: var(--text); background: var(--bg); line-height: 1.7; }
        a { color: var(--accent); text-decoration: none; }
        a:hover { color: var(--accent-hover); }
    </style>
</head>
<body>
    @include('components.header')
    <main style="text-align: center; padding: 8rem 1.5rem;">
        <p style="font-size: 6rem; font-weight: 700; color: var(--border); line-height: 1;">404</p>
        <h1 style="font-size: 1.75rem; margin: 1rem 0 0.5rem;">Page Not Found</h1>
        <p style="color: var(--muted); max-width: 400px; margin: 0 auto 2rem;">The page you're looking for doesn't exist or has been moved.</p>
        <a href="/" style="display: inline-block; background: var(--accent); color: #fff; padding: 0.75rem 1.5rem; border-radius: 6px; font-weight: 600;">Go Home</a>
    </main>
    @include('components.footer')
</body>
</html>
