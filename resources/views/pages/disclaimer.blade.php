@extends('layouts.app')

@section('title', 'Disclaimer - ' . config('app.name'))
@section('description', 'DigitalStack Disclaimer. Important disclosures about content, affiliate links, and liability.')

@section('content')
<main class="page-content">
    <div class="container">
        @include('components.breadcrumbs', ['breadcrumbs' => ['Disclaimer' => null]])
        <h1>Disclaimer</h1>
        <p style="color: var(--muted); margin-bottom: 2rem;">Last Updated: {{ date('F j, Y') }}</p>

        <h2>General Information</h2>
        <p>The information provided on DigitalStack is for general informational and educational purposes only. All content is published in good faith and for general information purposes only. DigitalStack makes no warranties about the completeness, reliability, and accuracy of this information.</p>

        <h2>Professional Advice</h2>
        <p>DigitalStack is not a substitute for professional advice. Always seek the advice of a qualified professional with any questions you may have regarding a particular subject.</p>

        <h2>Affiliate Disclosure</h2>
        <p>DigitalStack participates in affiliate marketing programs. This means we may earn commissions on purchases made through our links to retailer sites, at no additional cost to you. We only recommend products and services that we have personally used, tested, or thoroughly researched.</p>

        <h2>External Links</h2>
        <p>DigitalStack may contain links to external websites that are not provided or maintained by or in any way affiliated with DigitalStack. We do not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>

        <h2>Product and Service Reviews</h2>
        <p>Any product statistics, descriptions, claims, or other information should be verified with the manufacturer or provider. We do not endorse any product or service based solely on information gathered from this website.</p>

        <h2>Earnings and Income Disclaimer</h2>
        <p>Any earnings or income statements are only estimates. There is no assurance you'll do as well. If you rely upon our figures, you do so at your own risk.</p>

        <h2>AI-Generated Content</h2>
        <p>Some content on this website may be created with the assistance of artificial intelligence tools. All AI-assisted content is reviewed, edited, and verified by a human author before publication.</p>

        <h2>Consent</h2>
        <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>

        <h2>Contact</h2>
        <p>If you have any questions about this Disclaimer, please contact us via our <a href="/contact">contact page</a>.</p>
    </div>
</main>
@endsection
