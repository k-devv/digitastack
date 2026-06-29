@extends('layouts.app')

@section('title', 'Blog - ' . config('app.name'))
@section('description', 'Articles about AI tools, SEO strategies, and digital growth.')

@section('content')
<main class="page-content">
    <div class="container">
        @include('components.breadcrumbs', ['breadcrumbs' => ['Blog' => null]])
        <h1>Blog</h1>
        <p style="color: var(--muted); margin-bottom: 2rem;">Practical guides for builders and marketers.</p>

        @if($posts->isEmpty())
            <div class="empty-state">
                <p>No articles yet. Coming soon.</p>
            </div>
        @else
            <div style="display: grid; gap: 1.5rem;">
                @foreach($posts as $post)
                    <article style="padding: 1.5rem; border: 1px solid var(--border); border-radius: 8px;">
                        @if($post->category)
                            <span style="font-size: 0.75rem; color: var(--accent); text-transform: uppercase; letter-spacing: 0.05em;">{{ $post->category->name }}</span>
                        @endif
                        <h2 style="font-size: 1.25rem; margin: 0.5rem 0;">
                            <a href="{{ route('blog.show', $post->slug) }}" style="color: var(--text);">{{ $post->title }}</a>
                        </h2>
                        <p style="color: var(--muted); font-size: 0.875rem; margin-bottom: 0.75rem;">
                            {{ $post->published_at->format('M d, Y') }} &middot; {{ $post->reading_time }} min read
                        </p>
                        <p>{{ $post->excerpt }}</p>
                    </article>
                @endforeach
            </div>

            <div style="margin-top: 2rem;">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</main>
@endsection
