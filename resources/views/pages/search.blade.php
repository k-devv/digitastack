@extends('layouts.app')

@section('title', 'Search - ' . config('app.name'))
@section('description', 'Search DigitalStack for articles about AI tools, SEO, and digital strategy.')

@section('content')
<main class="page-content">
    <div class="container">
        @include('components.breadcrumbs', ['breadcrumbs' => ['Search' => null]])
        <h1>Search</h1>
        <p style="color: var(--muted); margin-bottom: 2rem;">Find articles about AI tools, SEO, and digital strategy.</p>

        <form action="/search" method="GET" role="search" class="search-form">
            <input type="search" name="q" placeholder="Search articles..." aria-label="Search" required>
            <button type="submit">Search</button>
        </form>

        <div class="empty-state">
            <p>No results to display yet. Articles coming soon.</p>
        </div>
    </div>
</main>
@endsection
