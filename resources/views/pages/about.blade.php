@extends('layouts.app')

@section('title', 'About - ' . config('app.name'))
@section('description', 'Learn about DigitalStack — a resource for AI tools, SEO strategies, and digital growth.')

@section('content')
<main class="page-content">
    <div class="container">
        <h1>About DigitalStack</h1>

        <p>Welcome! My name is Kennedy — and this site is where I document everything I learn about AI tools, SEO, and building things on the internet.</p>

        <h2>Why This Site Exists</h2>
        <p>I started DigitalStack because I was tired of scattered information. Every day, new AI tools launch. Every day, SEO changes. Every day, there's a new way to build, grow, or automate something online. I wanted one place to track it all — and share what actually works.</p>

        <h2>What I Cover</h2>
        <ul>
            <li><strong>AI Tools</strong> — Reviews, comparisons, and honest takes on AI products for business and productivity.</li>
            <li><strong>SEO</strong> — Keyword research, content strategy, technical SEO, and what I'm learning as I grow this site.</li>
            <li><strong>Digital Strategy</strong> — Tools, workflows, and systems for building online businesses.</li>
        </ul>

        <h2>What You'll Get Here</h2>
        <p>No fluff. No "10 AI Tools You Must Try" clickbait. Every article is based on personal testing and real results. If I recommend a tool, I've used it. If I share an SEO strategy, I've tested it on my own sites.</p>

        <h2>My Background</h2>
        <p>I've spent years working with digital tools, automating workflows, and testing everything the internet has to offer. I started with web development, moved into SEO, and now I'm deep in the AI space — building, testing, and sharing.</p>
        <p>Before starting DigitalStack, I worked on projects involving AI-powered automation, content systems, and data analytics. I've seen what works, what doesn't, and what's just hype.</p>

        <h2>Let's Connect</h2>
        <p>If you have questions, suggestions, or just want to say hello — visit my <a href="/contact">contact page</a>. I read every message.</p>

        <p style="margin-top: 2rem; padding: 1rem; background: var(--surface); border-radius: 8px;">
            <strong>Quick Facts:</strong><br>
            Based in Kenya | English & Swahili | Building in public
        </p>
    </div>
</main>
@endsection
