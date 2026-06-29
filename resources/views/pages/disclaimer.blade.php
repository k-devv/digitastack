<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disclaimer - {{ config('app.name') }}</title>
    <meta name="description" content="DigitalStack Disclaimer. Important disclosures about content, affiliate links, and liability.">
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
            <h1>Disclaimer</h1>
            <p class="effective">Last Updated: {{ date('F j, Y') }}</p>

            <h2>General Information</h2>
            <p>The information provided on DigitalStack is for general informational and educational purposes only. All content is published in good faith and for general information purposes only. DigitalStack makes no warranties about the completeness, reliability, and accuracy of this information. Any action you take upon the information you find on this website is strictly at your own risk.</p>

            <h2>Professional Advice</h2>
            <p>DigitalStack is not a substitute for professional advice. The content on this website is not intended to be a substitute for professional advice, diagnosis, or treatment. Always seek the advice of a qualified professional with any questions you may have regarding a particular subject. Never disregard professional advice or delay in seeking it because of something you have read on this website.</p>

            <h2>Affiliate Disclosure</h2>
            <p>DigitalStack participates in affiliate marketing programs. This means we may earn commissions on purchases made through our links to retailer sites, at no additional cost to you.</p>
            <p>We only recommend products and services that we have personally used, tested, or thoroughly researched. Our editorial content is not influenced by advertisers or affiliate partnerships.</p>
            <p>Disclosures in accordance with the Federal Trade Commission's 16 CFR Part 255: "Guides Concerning the Use of Endorsements and Testimonials in Advertising."</p>

            <h2>External Links</h2>
            <p>DigitalStack may contain links to external websites that are not provided or maintained by or in any way affiliated with DigitalStack. Please note that we do not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>

            <h2>Product and Service Reviews</h2>
            <p>Any product statistics, descriptions, claims, or other information about products or services should be verified with the manufacturer or provider. We do not endorse any product or service based solely on information gathered from this website.</p>

            <h2>Earnings and Income Disclaimer</h2>
            <p>Any earnings or income statements, or examples of earnings or income, are only estimates of what we think you could earn. There is no assurance you'll do as well. If you rely upon our figures, you do so at your own risk. Results may vary based on your individual situation, skills, experience, and work ethic.</p>

            <h2>AI-Generated Content</h2>
            <p>Some content on this website may be created with the assistance of artificial intelligence tools. All AI-assisted content is reviewed, edited, and verified by a human author before publication. The opinions and recommendations expressed are solely those of the human author.</p>

            <h2>Consent</h2>
            <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>

            <h2>Contact</h2>
            <p>If you have any questions about this Disclaimer, please contact us via our <a href="/contact">contact page</a>.</p>
        </div>
    </main>
    @include('components.footer')
</body>
</html>
