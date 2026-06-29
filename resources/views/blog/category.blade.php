@extends('layouts.app')

@section('title', $category->meta_title ?? $category->name . ' - ' . config('app.name'))
@section('description', $category->meta_description ?? $category->description)

@section('content')
<main class="page-content">
    <div class="container">
        @include('components.breadcrumbs', ['breadcrumbs' => ['Blog' => route('blog.index'), $category->name => null]])
        <h1>{{ $category->name }}</h1>

        @if($category->description)
            <p style="color: var(--muted); margin-bottom: 2rem;">{{ $category->description }}</p>
        @endif

        @if($posts->isEmpty())
            <div class="empty-state">
                <p>No articles in this category yet.</p>
            </div>
        @else
            <div style="display: grid; gap: 1.5rem;">
                @foreach($posts as $post)
                    <article style="padding: 1.5rem; border: 1px solid var(--border); border-radius: 8px;">
                        <h2 style="font-size: 1.25rem; margin: 0 0 0.5rem;">
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
