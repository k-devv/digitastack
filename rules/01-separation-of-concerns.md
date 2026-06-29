# Separation of Concerns

## Core Principle
Every feature is a self-contained module. Folders don't collide. Adding a new feature means creating new folders — never editing existing ones. Index pages are just component imports. Components are broken down to the smallest piece.

---

## Project Tree

```
mysite/
├── app/
│   │
│   ├── Blog/                              ← Feature module
│   │   ├── Http/
│   │   │   └── Controllers/
│   │   │       ├── Web/
│   │   │       └── Admin/
│   │   ├── Models/
│   │   ├── Services/
│   │   ├── Commands/                      ← Feature-specific commands
│   │   │   └── SyncPosts.php
│   │   ├── Routes/
│   │   │   ├── web.php
│   │   │   └── admin.php
│   │   └── Providers/
│   │
│   ├── SEO/                               ← Feature module
│   │   ├── Http/
│   │   │   └── Controllers/
│   │   │       └── Web/
│   │   ├── Models/
│   │   ├── Services/
│   │   ├── Commands/
│   │   │   └── KeywordSync.php
│   │   ├── Routes/
│   │   │   └── web.php
│   │   └── Providers/
│   │
│   ├── Models/                            ← Shared models
│   │   ├── Post.php
│   │   ├── Category.php
│   │   └── User.php
│   │
│   ├── Services/                          ← Shared services
│   │   └── SEO/
│   │       └── KeywordResearchService.php
│   │
│   ├── Console/
│   │   └── Commands/
│   │       ├── Blog/
│   │       │   └── SyncPosts.php
│   │       ├── SEO/
│   │       │   └── KeywordSync.php
│   │       └── Newsletter/
│   │           └── SyncContacts.php
│   │
│   └── Providers/
│
├── resources/
│   └── views/
│       ├── layouts/                       ← Page shells
│       │   └── app.blade.php
│       │
│       ├── components/                    ← Shared UI
│       │   ├── header.blade.php
│       │   ├── footer.blade.php
│       │   ├── nav.blade.php
│       │   └── adsense.blade.php
│       │
│       ├── blog/                          ← Blog feature views
│       │   ├── components/
│       │   │   ├── index/
│       │   │   │   ├── header.blade.php
│       │   │   │   ├── post-grid.blade.php
│       │   │   │   ├── sidebar.blade.php
│       │   │   │   ├── filters.blade.php
│       │   │   │   └── pagination.blade.php
│       │   │   ├── show/
│       │   │   │   ├── article-header.blade.php
│       │   │   │   ├── article-body.blade.php
│       │   │   │   ├── author-bio.blade.php
│       │   │   │   ├── related-posts.blade.php
│       │   │   │   └── comment-form.blade.php
│       │   │   └── post-card.blade.php
│       │   └── pages/
│       │       ├── index.blade.php        ← 10 lines: just @includes
│       │       └── show.blade.php         ← 10 lines: just @includes
│       │
│       ├── seo/                           ← SEO feature views
│       │   ├── components/
│       │   │   ├── index/
│       │   │   │   ├── header.blade.php
│       │   │   │   ├── keyword-table.blade.php
│       │   │   │   ├── stats-bar.blade.php
│       │   │   │   └── filters.blade.php
│       │   │   └── show/
│       │   │       ├── article-header.blade.php
│       │   │       └── article-body.blade.php
│       │   └── pages/
│       │       ├── index.blade.php
│       │       └── show.blade.php
│       │
│       └── admin/                         ← Admin panel views
│           ├── components/
│           │   └── pagination.blade.php
│           └── pages/
│               ├── dashboard.blade.php
│               ├── blog/
│               │   ├── components/
│               │   │   ├── index/
│               │   │   │   ├── header.blade.php
│               │   │   │   ├── post-table.blade.php
│               │   │   │   ├── stats-bar.blade.php
│               │   │   │   └── filters/
│               │   │   │       ├── status-filter.blade.php
│               │   │   │       └── category-filter.blade.php
│               │   │   ├── create/
│               │   │   │   └── post-form.blade.php
│               │   │   └── show/
│               │   │       └── post-details.blade.php
│               │   ├── index.blade.php
│               │   ├── create.blade.php
│               │   └── show.blade.php
│               └── seo/
│                   ├── components/
│                   └── pages/
│
├── routes/
│   ├── web.php                            ← Imports feature routes
│   ├── admin.php                          ← Admin routes only
│   ├── blog.php                           ← Blog routes only
│   └── seo.php                            ← SEO routes only
│
├── database/
│   └── migrations/
│
├── config/
│   └── blog.php
│
└── rules/                                 ← Architecture rules
```

---

## Rules

### 1. Index Pages = Only Components
Index pages are NOT pages. They are component manifests. 10-20 lines max.

**`resources/views/blog/pages/index.blade.php`:**
```html
@extends('layouts.app')
@section('content')
    @include('blog.components.index.header')
    @include('blog.components.index.post-grid')
    @include('blog.components.index.sidebar')
    @include('blog.components.index.pagination')
@endsection
```

**`resources/views/admin/pages/blog/index.blade.php`:**
```html
<x-admin-layout title="Blog">
    @include('admin.pages.blog.components.index.header')
    @include('admin.pages.blog.components.index.stats-bar')
    @include('admin.pages.blog.components.index.post-table')
    @include('admin.pages.blog.components.index.filters.status-filter')
    @include('admin.pages.blog.components.index.filters.category-filter')
</x-admin-layout>
```

**If an index page has more than 20 lines, you wrote too much logic.**

### 2. Components Are Broken Down to the Smallest Piece
Every piece of UI is its own file. One file = one job.

**DON'T:**
```
components/post-card.blade.php      ← 200 lines doing everything
```

**DO:**
```
components/
├── index/
│   ├── header.blade.php            ← Page header
│   ├── post-grid.blade.php         ← Grid layout
│   ├── post-card.blade.php         ← Single card
│   ├── sidebar.blade.php           ← Sidebar
│   ├── filters.blade.php           ← Filter controls
│   └── pagination.blade.php        ← Pagination
├── show/
│   ├── article-header.blade.php    ← Title, date, category
│   ├── article-body.blade.php      ← Content
│   ├── author-bio.blade.php        ← Author card
│   ├── related-posts.blade.php     ← Related section
│   └── comment-form.blade.php      ← Comment form
```

**Rule:** If a component has 3 different UI sections, split it into 3 files.

### 3. Commands Are Per Feature
Each feature owns its commands. No shared command bucket.

**DO:**
```
app/Blog/Commands/SyncPosts.php
app/SEO/Commands/KeywordSync.php
app/Newsletter/Commands/SyncContacts.php
```

Or grouped under Console:
```
app/Console/Commands/Blog/SyncPosts.php
app/Console/Commands/SEO/KeywordSync.php
app/Console/Commands/Newsletter/SyncContacts.php
```

**DON'T:**
```
app/Console/Commands/SyncPosts.php          ← Where does this belong?
app/Console/Commands/KeywordSync.php         ← Which feature is this?
```

### 4. Routes Are Split by Feature

**`routes/web.php`:**
```php
Route::group([], base_path('app/Blog/Routes/web.php'));
Route::group([], base_path('app/SEO/Routes/web.php'));
```

**`app/Blog/Routes/web.php`:**
```php
use App\Blog\Http\Controllers\Web\BlogController;

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

### 5. Controllers Are Thin

```php
// RIGHT
class BlogController
{
    public function index(BlogService $blog)
    {
        return view('blog.pages.index', $blog->getPublishedPosts());
    }
}

// WRONG
class BlogController
{
    public function index()
    {
        $posts = DB::table('posts')->where('published', true)->get();
        // ... 50 lines
    }
}
```

### 6. Shared vs Feature-Specific

| Belongs In | Example |
|------------|---------|
| `app/Models/` | Post, User — used by multiple features |
| `app/Blog/Models/` | Blog-specific model only used by Blog |
| `app/Services/` | SEOService — used by multiple features |
| `app/Blog/Services/` | BlogService — only used by Blog |
| `resources/views/components/` | header, footer — used everywhere |
| `resources/views/blog/components/` | post-card — only used by Blog |
| `app/Blog/Commands/` | SyncPosts — only runs for Blog |
| `app/Newsletter/Commands/` | SyncContacts — only runs for Newsletter |

---

## Adding a New Feature

1. Create `app/YourFeature/` with Http, Models, Services, Commands, Routes
2. Create `resources/views/yourfeature/` with `pages/` and `components/`
3. Break components into smallest pieces
4. Index page = only `@include` lines
5. Add route file in `app/YourFeature/Routes/web.php`
6. Import route file in `routes/web.php`
7. Done. Nothing else changes.

---

## Checklist
- [ ] Each feature has its own folder under `app/`
- [ ] Index pages are ≤ 20 lines (only `@include` statements)
- [ ] Components are broken into smallest pieces (one file = one job)
- [ ] Commands are per feature, not shared
- [ ] Routes are split by feature
- [ ] Controllers are thin (request → service → view)
- [ ] Services contain all business logic
- [ ] Adding a new feature = new folders, zero edits to existing code
