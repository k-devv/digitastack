# Separation of Concerns

## Core Principle
Every feature is a self-contained module. Folders don't collide. Adding a new feature means creating new folders — never editing existing ones.

---

## Project Tree

```
mysite/
├── app/
│   ├── Blog/                          ← Feature module (self-contained)
│   │   ├── Http/
│   │   │   └── Controllers/
│   │   │       ├── Web/               ← Public-facing controllers
│   │   │       └── Admin/             ← Admin controllers
│   │   ├── Models/
│   │   ├── Services/
│   │   ├── Routes/
│   │   │   └── web.php                ← Blog routes only
│   │   └── Providers/
│   │
│   ├── SEO/                           ← Feature module
│   │   ├── Http/
│   │   │   └── Controllers/
│   │   │       └── Web/
│   │   ├── Models/
│   │   ├── Services/
│   │   ├── Routes/
│   │   │   └── web.php
│   │   └── Providers/
│   │
│   ├── Models/                        ← Shared models (used across features)
│   │   ├── Post.php
│   │   ├── Category.php
│   │   └── Comment.php
│   │
│   ├── Services/                      ← Shared services (used across features)
│   │   └── SEO/
│   │       └── KeywordResearchService.php
│   │
│   └── Providers/                     ← App-level service providers
│
├── resources/
│   └── views/
│       ├── layouts/                   ← Page shells (app.blade.php)
│       ├── components/                ← Shared UI (header, footer, nav, ads)
│       │
│       ├── blog/                      ← Blog feature views
│       │   ├── components/            ← Blog-specific UI pieces
│       │   │   ├── post-card.blade.php
│       │   │   ├── sidebar.blade.php
│       │   │   └── comment-form.blade.php
│       │   └── pages/                 ← Blog pages
│       │       ├── index.blade.php    ← Blog listing
│       │       └── show.blade.php     ← Single post
│       │
│       ├── seo/                       ← SEO feature views
│       │   ├── components/
│       │   │   └── keyword-table.blade.php
│       │   └── pages/
│       │       ├── index.blade.php
│       │       └── show.blade.php
│       │
│       └── admin/                     ← Admin panel views
│           ├── components/            ← Admin-specific UI
│           └── pages/
│               ├── dashboard/
│               ├── blog/
│               └── seo/
│
├── routes/
│   ├── web.php                        ← Main frontend routes (imports feature routes)
│   ├── admin.php                      ← Admin routes only
│   ├── blog.php                       ← Blog feature routes only
│   └── seo.php                        ← SEO feature routes only
│
├── database/
│   └── migrations/
│
├── config/
│   └── blog.php                       ← Blog feature config (if needed)
│
└── rules/                             ← Architecture rules
```

---

## Rules

### 1. Features Are Self-Contained Modules
Each feature (Blog, SEO, etc.) lives in its own folder under `app/`. It has everything it needs — controllers, models, services, routes, views.

**DO:**
```
app/Blog/Http/Controllers/Web/BlogController.php
app/Blog/Models/Post.php
app/Blog/Services/PostService.php
app/Blog/Routes/web.php
resources/views/blog/pages/index.blade.php
resources/views/blog/components/post-card.blade.php
```

**DON'T:**
```
app/Http/Controllers/BlogController.php      ← Wrong: mixes with other controllers
app/Models/BlogPost.php                       ← Wrong: mixes with other models
resources/views/blog/index.blade.php          ← Wrong: flat, no components
```

### 2. Views Use Layouts + Components
Pages include components. Never write raw HTML in pages when a component exists.

**Layout (`resources/views/layouts/app.blade.php`):**
```html
<!DOCTYPE html>
<html>
<head>...</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
</html>
```

**Page (`resources/views/blog/pages/index.blade.php`):**
```html
@extends('layouts.app')
@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
        @include('blog.components.post-card', ['post' => $post])
    @endforeach
@endsection
```

**Component (`resources/views/blog/components/post-card.blade.php`):**
```html
<article>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->excerpt }}</p>
</article>
```

### 3. Routes Are Split by Feature
Each feature has its own route file. Main `web.php` imports them.

**`routes/web.php`:**
```php
Route::group([], base_path('app/Blog/Routes/web.php'));
Route::group([], base_path('app/SEO/Routes/web.php'));
```

**`app/Blog/Routes/web.php`:**
```php
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
```

**`routes/admin.php`:**
```php
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::group([], base_path('app/Blog/Routes/admin.php'));
    Route::group([], base_path('app/SEO/Routes/admin.php'));
});
```

### 4. Controllers Are Thin
Controller receives request → calls Service → returns view. Nothing else.

```php
// RIGHT
class BlogController
{
    public function index(BlogService $blog)
    {
        return view('blog.pages.index', $blog->getPublishedPosts());
    }

    public function show(string $slug, BlogService $blog)
    {
        return view('blog.pages.show', $blog->getPost($slug));
    }
}

// WRONG
class BlogController
{
    public function index()
    {
        $posts = DB::table('posts')->where('published', true)->get();
        $featured = $posts->first();
        $categories = Category::all();
        $sidebar = view('components.sidebar')->render();
        // ... 50 lines of logic
    }
}
```

### 5. Services Contain Business Logic
All logic lives in Services. Controllers never touch DB directly.

```php
// app/Blog/Services/BlogService.php
class BlogService
{
    public function getPublishedPosts()
    {
        return Post::published()->paginate(12);
    }

    public function getPost(string $slug)
    {
        return Post::where('slug', $slug)->firstOrFail();
    }
}
```

### 6. Shared vs Feature-Specific

| Belongs In | Example |
|------------|---------|
| `app/Models/` (shared) | Post, User, Category — used by multiple features |
| `app/Blog/Models/` | Blog-specific models only used by Blog |
| `app/Services/` (shared) | SEOService, AnalyticsService — used by multiple features |
| `app/Blog/Services/` | BlogService — only used by Blog |
| `resources/views/components/` | header, footer, nav — used everywhere |
| `resources/views/blog/components/` | post-card, sidebar — only used by Blog |

---

## Adding a New Feature

1. Create `app/YourFeature/` with Http, Models, Services, Routes
2. Create `resources/views/yourfeature/` with pages and components
3. Add route file in `app/YourFeature/Routes/web.php`
4. Import route file in `routes/web.php`
5. Done. Nothing else changes.

---

## Checklist
- [ ] Each feature has its own folder under `app/`
- [ ] Views use layouts + components (no raw HTML in pages)
- [ ] Routes are split by feature
- [ ] Controllers are thin (request → service → view)
- [ ] Services contain all business logic
- [ ] Shared code lives in `app/Models/`, `app/Services/`, `resources/views/components/`
- [ ] Feature-specific code lives in its own module folder
