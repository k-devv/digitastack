@extends('layouts.app')

@section('title', 'Page Not Found - ' . config('app.name'))

@section('head')
<meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<main style="text-align: center; padding: 8rem 1.5rem;">
    <p style="font-size: 6rem; font-weight: 700; color: var(--border); line-height: 1;">404</p>
    <h1 style="font-size: 1.75rem; margin: 1rem 0 0.5rem;">Page Not Found</h1>
    <p style="color: var(--muted); max-width: 400px; margin: 0 auto 2rem;">The page you're looking for doesn't exist or has been moved.</p>
    <a href="/" style="display: inline-block; background: var(--accent); color: #fff; padding: 0.75rem 1.5rem; border-radius: 6px; font-weight: 600;">Go Home</a>
</main>
@endsection
