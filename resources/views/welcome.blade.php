@extends('layouts.app')

@section('title', config('app.name') . ' - AI Tools, SEO & Digital Strategy')
@section('description', 'AI tools, SEO insights, and digital strategies that actually work. Practical guides for builders and marketers.')

@section('content')
<main class="hero">
    <div class="container">
        <h1>AI Tools, SEO &<br>Digital Strategy</h1>
        <p>Practical guides for builders and marketers. No fluff, no clickbait — just what actually works.</p>
        <a href="/blog" class="btn">Read the Blog</a>
    </div>
</main>

<section class="container" style="padding: 2rem 0;">
    <h2 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1.5rem; text-align: center;">What We Cover</h2>
    <div class="topic-grid">
        <div class="topic-card">
            <div class="icon">&#129302;</div>
            <h3>AI Tools</h3>
            <p>Reviews, comparisons, and honest takes on AI products.</p>
        </div>
        <div class="topic-card">
            <div class="icon">&#128269;</div>
            <h3>SEO</h3>
            <p>Keyword research, strategy, and what I'm learning.</p>
        </div>
        <div class="topic-card">
            <div class="icon">&#9889;</div>
            <h3>Digital Strategy</h3>
            <p>Workflows and systems for building online.</p>
        </div>
    </div>
</section>
@endsection
