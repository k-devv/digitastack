<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Policy - {{ config('app.name') }}</title>
    <meta name="description" content="DigitalStack Cookie Policy. How we use cookies and your choices regarding cookies.">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        :root {
            --bg: #ffffff; --text: #1a1a2e; --muted: #64748b; --accent: #2563eb;
            --border: #e2e8f0; --surface: #f8fafc; --max-w: 800px;
            --font: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        body { font-family: var(--font); color: var(--text); background: var(--bg); line-height: 1.7; }
        a { color: var(--accent); text-decoration: none; }
        .container { max-width: var(--max-w); margin: 0 auto; padding: 0 1.5rem; }
        .page-content { padding: 3rem 0 5rem; }
        .page-content h1 { font-size: 2rem; margin-bottom: 0.5rem; }
        .page-content .effective { color: var(--muted); margin-bottom: 2rem; }
        .page-content h2 { font-size: 1.25rem; margin: 2rem 0 0.75rem; }
        .page-content p { margin-bottom: 1rem; }
        .page-content ul { margin: 0 0 1rem 1.5rem; }
        .page-content li { margin-bottom: 0.5rem; }
        .page-content table { width: 100%; border-collapse: collapse; margin-bottom: 1rem; }
        .page-content th, .page-content td { text-align: left; padding: 0.5rem; border-bottom: 1px solid var(--border); }
        .page-content th { font-weight: 600; font-size: 0.875rem; }
    </style>
</head>
<body>
    @include('components.header')
    <main class="page-content">
        <div class="container">
            <h1>Cookie Policy</h1>
            <p class="effective">Effective Date: {{ date('F j, Y') }}</p>

            <p>What Are Cookies: Cookies are small text files that are stored on your device (computer, tablet, or mobile) when you visit a website. They are widely used to make websites work efficiently and to provide information to website owners.</p>

            <h2>1. How We Use Cookies</h2>
            <p>We use cookies for the following purposes:</p>
            <ul>
                <li><strong>Essential Cookies:</strong> These are necessary for the website to function properly. They enable core functionality such as security, network management, and account access. You cannot opt out of these cookies.</li>
                <li><strong>Analytics Cookies:</strong> These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us understand which pages are most and least popular and see how visitors move around the site.</li>
                <li><strong>Advertising Cookies:</strong> These cookies may be set through our site by our advertising partners (Google AdSense). They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites.</li>
                <li><strong>Preference Cookies:</strong> These enable a website to remember information that changes the way the website behaves or looks, like your preferred language or the region that you are in.</li>
            </ul>

            <h2>2. Cookies We Use</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cookie</th>
                        <th>Provider</th>
                        <th>Purpose</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>_ga</td>
                        <td>Google Analytics</td>
                        <td>Used to distinguish users</td>
                        <td>2 years</td>
                    </tr>
                    <tr>
                        <td>_gid</td>
                        <td>Google Analytics</td>
                        <td>Used to distinguish users</td>
                        <td>24 hours</td>
                    </tr>
                    <tr>
                        <td>_gat</td>
                        <td>Google Analytics</td>
                        <td>Used to throttle request rate</td>
                        <td>1 minute</td>
                    </tr>
                    <tr>
                        <td>NID</td>
                        <td>Google</td>
                        <td>Used for advertising</td>
                        <td>6 months</td>
                    </tr>
                    <tr>
                        <td>IDE</td>
                        <td>Google DoubleClick</td>
                        <td>Used for advertising</td>
                        <td>1 year</td>
                    </tr>
                    <tr>
                        <td>test_cookie</td>
                        <td>Google DoubleClick</td>
                        <td>Check if browser supports cookies</td>
                        <td>15 minutes</td>
                    </tr>
                </tbody>
            </table>

            <h2>3. Third-Party Cookies</h2>
            <p>In some special cases, we also use cookies provided by trusted third parties. The following section details which third-party cookies you might encounter through this site:</p>
            <ul>
                <li><strong>Google Analytics:</strong> One of the most widespread and trusted analytics solutions on the web for understanding how you use the site. These cookies track things such as how long you spend on the site and the pages that you visit. We use this information to improve our site. For more information on Google Analytics cookies, see the <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage" target="_blank" rel="noopener">official Google Analytics page</a>.</li>
                <li><strong>Google AdSense:</strong> Google uses cookies to serve ads on our site. Google's use of the DART cookie enables it to serve ads to our site's visitors based upon their visit to other sites on the internet. You may opt out of the use of the DART cookie by visiting the <a href="https://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ad and Content Network privacy policy</a>.</li>
            </ul>

            <h2>4. Managing Cookies</h2>
            <p>You can control and manage cookies in various ways. Please keep in mind that removing or blocking cookies can negatively impact your user experience and parts of our website may no longer be fully accessible.</p>
            <p>Most browsers allow you to:</p>
            <ul>
                <li>View and delete cookies</li>
                <li>Block third-party cookies</li>
                <li>Block all cookies</li>
                <li>Accept all cookies</li>
            </ul>
            <p>You can usually find these settings in the "Options" or "Preferences" menu of your browser.</p>

            <h2>5. Changes to This Policy</h2>
            <p>We may update our Cookie Policy from time to time. We will notify you of any changes by posting the new Cookie Policy on this page and updating the "effective date" at the top of this page.</p>

            <h2>6. Contact Us</h2>
            <p>If you have any questions about our Cookie Policy, please contact us via our <a href="/contact">contact page</a>.</p>
        </div>
    </main>
    @include('components.footer')
</body>
</html>
