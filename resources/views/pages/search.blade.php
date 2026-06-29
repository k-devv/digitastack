@extends('layouts.app')

@section('title', 'Search - ' . config('app.name'))
@section('description', 'Search DigitalStack for articles about AI tools, SEO, and digital strategy.')

@section('content')
<main class="page-content">
    <div class="container">
        <h1>Search</h1>
        <p style="color: var(--muted); margin-bottom: 2rem;">Find articles about AI tools, SEO, and digital strategy.</p>

        @include('components.search-form')

        <div style="margin-top: 2rem; padding: 2rem; background: var(--surface); border-radius: 8px; text-align: center;">
            <p style="color: var(--muted);">No results to display yet. Articles coming soon.</p>
        </div>
    </div>
</main>
@endsection
