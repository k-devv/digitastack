<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - {{ config('app.name') }}</title>
    <meta name="description" content="DigitalStack Privacy Policy. How we collect, use, and protect your information.">
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
        .page-content strong { font-weight: 600; }
    </style>
</head>
<body>
    @include('components.header')
    <main class="page-content">
        <div class="container">
            <h1>Privacy Policy</h1>
            <p class="effective">Effective Date: {{ date('F j, Y') }}</p>

            <p>DigitalStack ("us", "we", or "operates the DigitalStack website. This page informs you of our policies regarding the collection, use, and disclosure of personal information when you use our Service.</p>

            <h2>1. Information We Collect</h2>
            <p>We collect several types of information for various purposes to provide and improve our Service to you:</p>
            <ul>
                <li><strong>Personal Data:</strong> While using our Service, we may ask you to provide certain personally identifiable information including but not limited to your name and email address (via contact form submissions).</li>
                <li><strong>Usage Data:</strong> We may also collect information on how the Service is accessed and used. This Usage Data may include information such as your computer's Internet Protocol address, browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other diagnostic data.</li>
                <li><strong>Cookies:</strong> We use cookies and similar tracking technologies to track activity on our Service and hold certain information. See our <a href="/cookie-policy">Cookie Policy</a> for details.</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <p>DigitalStack uses the collected data for various purposes:</p>
            <ul>
                <li>To provide and maintain our Service</li>
                <li>To notify you about changes to our Service</li>
                <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
                <li>To provide customer support</li>
                <li>To gather analysis so that we can improve our Service</li>
                <li>To monitor the usage of our Service</li>
                <li>To detect, prevent, and address technical issues</li>
            </ul>

            <h2>3. Third-Party Services</h2>
            <p>We employ third-party companies and individuals to facilitate our Service, provide the Service on our behalf, perform Service-related services, or assist us in analysing how our Service is used. These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>
            <ul>
                <li><strong>Google Analytics:</strong> We use Google Analytics to track and report traffic. Google Analytics collects information such as how often users visit this site, what other sites they visited prior, and what they did on the site. We use the information we get from Google Analytics only to improve this site. Google Analytics collects only the IP address assigned to you on the date you visit this site, not your name or other identifying information. We do not combine the information collected through the use of Google Analytics with personally identifiable information. Although Google Analytics plants a permanent cookie on your web browser to identify you as a unique user the next time you visit this site, the cookie cannot be used by anyone but Google. Google's ability to use and share information collected by Google Analytics is restricted by the <a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener">Google Analytics Terms of Use</a>.</li>
                <li><strong>Google AdSense:</strong> We use Google AdSense to serve advertisements. Google uses cookies to serve ads based on a user's prior visits to our website or other websites. Google's use of advertising cookies enables it and its partners to serve ads based on your visit to this site and/or other sites on the internet. You may opt out of personalized advertising by visiting <a href="https://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a>.</li>
            </ul>

            <h2>4. Data Retention</h2>
            <p>We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our legal agreements and policies.</p>

            <h2>5. Data Security</h2>
            <p>The security of your data is important to us. We strive to use commercially acceptable means of protecting your Personal Information, but no method of transmission over the Internet or method of electronic storage is 100% secure.</p>

            <h2>6. Your Rights</h2>
            <p>If you are a resident of the European Economic Area (EEA), you have certain data protection rights. DigitalStack aims to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data. If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please contact us.</p>

            <h2>7. Changes to This Policy</h2>
            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "effective date" at the top of this page.</p>

            <h2>8. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us via our <a href="/contact">contact page</a>.</p>
        </div>
    </main>
    @include('components.footer')
</body>
</html>
