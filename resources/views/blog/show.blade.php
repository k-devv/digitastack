@extends('layouts.app')

@section('title', $post->meta_title . ' - ' . config('app.name'))
@section('description', $post->meta_description)

@section('head')
    <meta property="og:title" content="{{ $post->og_title }}">
    <meta property="og:description" content="{{ $post->og_description }}">
    @if($post->og_image)
        <meta property="og:image" content="{{ $post->og_image }}">
    @endif
    <link rel="canonical" href="{{ url('/blog/' . $post->slug) }}">
@endsection

@section('content')
<main class="page-content">
    <div class="container">
        @include('components.breadcrumbs', ['breadcrumbs' => ['Blog' => route('blog.index'), $post->title => null]])

        <article>
            @if($post->category)
                <span style="font-size: 0.75rem; color: var(--accent); text-transform: uppercase; letter-spacing: 0.05em;">{{ $post->category->name }}</span>
            @endif

            <h1 style="margin-top: 0.5rem;">{{ $post->title }}</h1>

            <p style="color: var(--muted); font-size: 0.875rem; margin-bottom: 2rem;">
                {{ $post->published_at->format('M d, Y') }} &middot; {{ $post->reading_time }} min read &middot; {{ number_format($post->views_count) }} views
            </p>

            @if($post->featured_image)
                <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" style="border-radius: 8px; margin-bottom: 2rem;">
            @endif

            <div class="post-body">
                {!! $post->body !!}
            </div>
        </article>

        @if($post->focus_keyword)
            <div style="margin-top: 2rem; padding: 1rem; background: var(--surface); border-radius: 8px; font-size: 0.875rem; color: var(--muted);">
                <strong>Focus keyword:</strong> {{ $post->focus_keyword }}
            </div>
        @endif
    </div>
</main>
@endsection
