@extends('layouts.app')

@section('title', config('app.name') . ' - AI Tools, SEO & Digital Strategy')
@section('description', 'AI tools, SEO insights, and digital strategies that actually work. Practical guides for builders and marketers.')

@section('content')
<main style="padding: 4rem 0 3rem; text-align: center;">
    <div class="container">
        <h1 style="font-size: 2.5rem; font-weight: 700; line-height: 1.2; margin-bottom: 1rem;">AI Tools, SEO &<br>Digital Strategy</h1>
        <p style="color: var(--muted); font-size: 1.125rem; max-width: 520px; margin: 0 auto 2rem;">Practical guides for builders and marketers. No fluff, no clickbait — just what actually works.</p>
        <a href="/blog" style="display: inline-block; background: var(--accent); color: #fff; padding: 0.75rem 2rem; border-radius: 6px; font-weight: 600; font-size: 1rem;">Read the Blog</a>
    </div>
</main>

<section class="container" style="padding: 2rem 0;">
    <h2 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1.5rem; text-align: center;">What We Cover</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem; max-width: 800px; margin: 0 auto;">
        <div style="padding: 1.5rem; border: 1px solid var(--border); border-radius: 8px; text-align: center;">
            <p style="font-size: 2rem; margin-bottom: 0.5rem;">🤖</p>
            <h3 style="font-size: 1rem; margin-bottom: 0.25rem;">AI Tools</h3>
            <p style="color: var(--muted); font-size: 0.875rem;">Reviews, comparisons, and honest takes on AI products.</p>
        </div>
        <div style="padding: 1.5rem; border: 1px solid var(--border); border-radius: 8px; text-align: center;">
            <p style="font-size: 2rem; margin-bottom: 0.5rem;">🔍</p>
            <h3 style="font-size: 1rem; margin-bottom: 0.25rem;">SEO</h3>
            <p style="color: var(--muted); font-size: 0.875rem;">Keyword research, strategy, and what I'm learning.</p>
        </div>
        <div style="padding: 1.5rem; border: 1px solid var(--border); border-radius: 8px; text-align: center;">
            <p style="font-size: 2rem; margin-bottom: 0.5rem;">⚡</p>
            <h3 style="font-size: 1rem; margin-bottom: 0.25rem;">Digital Strategy</h3>
            <p style="color: var(--muted); font-size: 0.875rem;">Workflows and systems for building online.</p>
        </div>
    </div>
</section>
@endsection
