@extends('layouts.app')

@section('title', 'Terms of Service - ' . config('app.name'))
@section('description', 'DigitalStack Terms of Service. Rules governing your use of our website and services.')

@section('content')
<main class="page-content">
    <div class="container">
        <h1>Terms of Service</h1>
        <p style="color: var(--muted); margin-bottom: 2rem;">Effective Date: {{ date('F j, Y') }}</p>

        <p>Welcome to DigitalStack. By accessing or using our website, you agree to be bound by these Terms of Service.</p>

        <h2>1. Acceptance of Terms</h2>
        <p>By accessing and using DigitalStack, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to these terms, please do not use our Service.</p>

        <h2>2. Use of Our Service</h2>
        <p>You agree to use the Service only for lawful purposes and in accordance with these Terms. You are responsible for ensuring that your use complies with all applicable laws.</p>

        <h2>3. Intellectual Property</h2>
        <p>The Service and its original content, features, and functionality are owned by DigitalStack and are protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>

        <h2>4. User-Generated Content</h2>
        <p>If you submit comments or feedback, you grant us a non-exclusive, royalty-free, perpetual right to use, reproduce, modify, and distribute such content.</p>

        <h2>5. Disclaimer of Warranties</h2>
        <p>The Service is provided on an "as is" and "as available" basis without any warranties of any kind.</p>

        <h2>6. Limitation of Liability</h2>
        <p>In no event shall DigitalStack be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of or inability to use the Service.</p>

        <h2>7. External Links</h2>
        <p>Our Service may contain links to external websites that are not operated by us. We have no control over and assume no responsibility for their content or practices.</p>

        <h2>8. Affiliate Disclosure</h2>
        <p>Some links on this website are affiliate links. We may earn a commission if you click on them and make a purchase, at no additional cost to you.</p>

        <h2>9. Changes to Terms</h2>
        <p>We reserve the right to modify or replace these Terms at any time. It is your responsibility to check these Terms periodically for changes.</p>

        <h2>10. Contact Us</h2>
        <p>If you have any questions about these Terms, please contact us via our <a href="/contact">contact page</a>.</p>
    </div>
</main>
@endsection
