<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - {{ config('app.name') }}</title>
    <meta name="description" content="DigitalStack Terms of Service. Rules governing your use of our website and services.">
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
    </style>
</head>
<body>
    @include('components.header')
    <main class="page-content">
        <div class="container">
            <h1>Terms of Service</h1>
            <p class="effective">Effective Date: {{ date('F j, Y') }}</p>

            <p>Welcome to DigitalStack. By accessing or using our website, you agree to be bound by these Terms of Service. If you disagree with any part of these terms, you may not access the Service.</p>

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing and using DigitalStack (the "Service"), you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to these terms, please do not use our Service.</p>

            <h2>2. Use of Our Service</h2>
            <p>You agree to use the Service only for lawful purposes and in accordance with these Terms. You are responsible for:</p>
            <ul>
                <li>Ensuring that your use of the Service complies with all applicable laws and regulations</li>
                <li>Maintaining the confidentiality of any account information</li>
                <li>Not using the Service for any fraudulent or malicious purpose</li>
                <li>Not attempting to gain unauthorized access to any part of the Service</li>
            </ul>

            <h2>3. Intellectual Property</h2>
            <p>The Service and its original content, features, and functionality are owned by DigitalStack and are protected by international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.</p>
            <p>You may not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store, or transmit any of the material on our Service, except as follows:</p>
            <ul>
                <li>Your computer may temporarily store copies of such materials in RAM incidental to your accessing and viewing those materials</li>
                <li>You may store files that are automatically cached by your web browser for display enhancement purposes</li>
                <li>You may print or download a reasonable number of pages of the Service for your own personal, non-commercial use</li>
            </ul>

            <h2>4. User-Generated Content</h2>
            <p>If you submit comments, feedback, or other content to our Service, you grant us a non-exclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, and display such content throughout the world in any media.</p>

            <h2>5. Disclaimer of Warranties</h2>
            <p>The Service is provided on an "as is" and "as available" basis without any warranties of any kind. DigitalStack does not warrant that:</p>
            <ul>
                <li>The Service will be uninterrupted, timely, secure, or error-free</li>
                <li>The results obtained from the use of the Service will be accurate or reliable</li>
                <li>The quality of any products, services, information, or other material purchased or obtained through the Service will meet your expectations</li>
            </ul>

            <h2>6. Limitation of Liability</h2>
            <p>In no event shall DigitalStack be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of or inability to use the Service, including but not limited to loss of profits, data, use, goodwill, or other intangible losses.</p>

            <h2>7. External Links</h2>
            <p>Our Service may contain links to external websites that are not operated by us. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>

            <h2>8. Affiliate Disclosure</h2>
            <p>Some of the links on this website are affiliate links, meaning we may earn a commission if you click on them and make a purchase. This comes at no additional cost to you. We only recommend products and services that we have personally used or thoroughly researched.</p>

            <h2>9. Termination</h2>
            <p>We may terminate or suspend your access to the Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

            <h2>10. Changes to Terms</h2>
            <p>We reserve the right to modify or replace these Terms at any time. It is your responsibility to check these Terms periodically for changes. Your continued use of the Service following the posting of any changes constitutes acceptance of those changes.</p>

            <h2>11. Contact Us</h2>
            <p>If you have any questions about these Terms, please contact us via our <a href="/contact">contact page</a>.</p>
        </div>
    </main>
    @include('components.footer')
</body>
</html>
