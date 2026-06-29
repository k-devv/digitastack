@extends('layouts.app')

@section('title', 'Cookie Policy - ' . config('app.name'))
@section('description', 'DigitalStack Cookie Policy. How we use cookies and your choices regarding cookies.')

@section('content')
<main class="page-content">
    <div class="container">
        <h1>Cookie Policy</h1>
        <p style="color: var(--muted); margin-bottom: 2rem;">Effective Date: {{ date('F j, Y') }}</p>

        <p>What Are Cookies: Cookies are small text files that are stored on your device when you visit a website. They are widely used to make websites work efficiently and to provide information to website owners.</p>

        <h2>1. How We Use Cookies</h2>
        <ul>
            <li><strong>Essential Cookies:</strong> These are necessary for the website to function properly. You cannot opt out of these cookies.</li>
            <li><strong>Analytics Cookies:</strong> These allow us to count visits and traffic sources so we can measure and improve performance.</li>
            <li><strong>Advertising Cookies:</strong> These may be set through our site by our advertising partners (Google AdSense). They may be used to build a profile of your interests and show you relevant adverts.</li>
            <li><strong>Preference Cookies:</strong> These enable a website to remember information that changes the way the website behaves or looks.</li>
        </ul>

        <h2>2. Cookies We Use</h2>
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 1rem;">
            <thead>
                <tr>
                    <th style="text-align: left; padding: 0.5rem; border-bottom: 1px solid var(--border); font-weight: 600; font-size: 0.875rem;">Cookie</th>
                    <th style="text-align: left; padding: 0.5rem; border-bottom: 1px solid var(--border); font-weight: 600; font-size: 0.875rem;">Provider</th>
                    <th style="text-align: left; padding: 0.5rem; border-bottom: 1px solid var(--border); font-weight: 600; font-size: 0.875rem;">Purpose</th>
                    <th style="text-align: left; padding: 0.5rem; border-bottom: 1px solid var(--border); font-weight: 600; font-size: 0.875rem;">Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">_ga</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Google Analytics</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Distinguish users</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">2 years</td></tr>
                <tr><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">_gid</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Google Analytics</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Distinguish users</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">24 hours</td></tr>
                <tr><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">_gat</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Google Analytics</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Throttle request rate</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">1 minute</td></tr>
                <tr><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">NID</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Google</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Advertising</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">6 months</td></tr>
                <tr><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">IDE</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Google DoubleClick</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">Advertising</td><td style="padding: 0.5rem; border-bottom: 1px solid var(--border);">1 year</td></tr>
                <tr><td style="padding: 0.5rem;">test_cookie</td><td style="padding: 0.5rem;">Google DoubleClick</td><td style="padding: 0.5rem;">Check browser support</td><td style="padding: 0.5rem;">15 minutes</td></tr>
            </tbody>
        </table>

        <h2>3. Third-Party Cookies</h2>
        <ul>
            <li><strong>Google Analytics:</strong> Tracks how you use the site. See the <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage" target="_blank" rel="noopener">official Google Analytics page</a>.</li>
            <li><strong>Google AdSense:</strong> Google uses cookies to serve ads. You may opt out by visiting the <a href="https://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ad and Content Network privacy policy</a>.</li>
        </ul>

        <h2>4. Managing Cookies</h2>
        <p>Most browsers allow you to view and delete cookies, block third-party cookies, or block all cookies. You can usually find these settings in the "Options" or "Preferences" menu of your browser.</p>

        <h2>5. Changes to This Policy</h2>
        <p>We may update our Cookie Policy from time to time. We will notify you of any changes by posting the new Cookie Policy on this page.</p>

        <h2>6. Contact Us</h2>
        <p>If you have any questions about our Cookie Policy, please contact us via our <a href="/contact">contact page</a>.</p>
    </div>
</main>
@endsection
