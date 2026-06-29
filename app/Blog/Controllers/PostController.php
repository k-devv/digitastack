<?php

namespace App\Blog\Controllers;

use App\Blog\Models\Post;
use App\Blog\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * List published posts (blog index).
     */
    public function index()
    {
        $posts = Post::published()
            ->with('category', 'author')
            ->orderByDesc('published_at')
            ->paginate(12);

        return view('blog.index', compact('posts'));
    }

    /**
     * Single post by slug.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->with('category', 'author')
            ->firstOrFail();

        $post->incrementViews();

        return view('blog.show', compact('post'));
    }

    /**
     * Posts by category.
     */
    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = $category->publishedPosts()
            ->with('author')
            ->orderByDesc('published_at')
            ->paginate(12);

        return view('blog.category', compact('category', 'posts'));
    }
}
