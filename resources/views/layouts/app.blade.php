<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', config('app.name') . ' - AI tools, SEO insights, and digital strategies that actually work.')">

    @include('components.seo.meta-tags')

    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        :root {
            --bg: #ffffff;
            --text: #1a1a2e;
            --muted: #64748b;
            --accent: #2563eb;
            --accent-hover: #1d4ed8;
            --border: #e2e8f0;
            --surface: #f8fafc;
            --max-w: 800px;
            --font: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        body { font-family: var(--font); color: var(--text); background: var(--bg); line-height: 1.7; }
        a { color: var(--accent); text-decoration: none; }
        a:hover { color: var(--accent-hover); }
        img { max-width: 100%; height: auto; }
        .container { max-width: var(--max-w); margin: 0 auto; padding: 0 1.5rem; }
        .page-content { padding: 3rem 0 5rem; }
        .page-content h1 { font-size: 2rem; margin-bottom: 1rem; line-height: 1.3; }
        .page-content h2 { font-size: 1.5rem; margin: 2rem 0 0.75rem; }
        .page-content h3 { font-size: 1.25rem; margin: 1.5rem 0 0.5rem; }
        .page-content p { margin-bottom: 1rem; }
        .page-content ul, .page-content ol { margin: 0 0 1rem 1.5rem; }
        .page-content li { margin-bottom: 0.5rem; }
        .page-content strong { font-weight: 600; }
    </style>
    @yield('head')
</head>
<body>
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @yield('scripts')
</body>
</html>
