<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('components.seo.meta-tags')
    @include('components.seo.schema')

    <title>@yield('title', config('app.name'))</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>
<body>
    @include('components.header')
    <div class="nav-overlay" aria-hidden="true"></div>
    @include('components.social-proof')

    <main>
        @yield('content')
    </main>

    @include('components.newsletter-cta')
    @include('components.footer')

    {{-- Consent Mode defaults + CookieYes CMP --}}
    @include('components.cookie-consent')
    {{-- AdSense --}}
    @include('components.adsense')

    <script>
    (function() {
        var toggle = document.querySelector('.nav-toggle');
        var nav = document.querySelector('.site-nav');
        var overlay = document.querySelector('.nav-overlay');
        if (toggle && nav && overlay) {
            toggle.addEventListener('click', function() {
                nav.classList.toggle('open');
                overlay.classList.toggle('open');
                toggle.setAttribute('aria-expanded', nav.classList.contains('open'));
            });
            overlay.addEventListener('click', function() {
                nav.classList.remove('open');
                overlay.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        }
    })();
    </script>
    @yield('scripts')
</body>
</html>
