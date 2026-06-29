# Separation of Concerns

## Rule
Each file has ONE job. If a file is doing two things, split it.

## Structure

```
app/
├── Http/
│   └── Controllers/    → Handle request + response only
├── Models/             → Database logic + relationships only
├── Services/           → Business logic only
├── View/Components/    → Reusable Blade components
resources/views/
├── layouts/            → Page shells (header, footer, nav)
├── components/         → Reusable UI pieces (cards, buttons, ads)
├── pages/              → Full page templates
routes/
│   └── web.php         → Route definitions only
```

## Rules

### Controllers
- Receive request
- Call a Service
- Return a view
- **NO** business logic in controllers
- **NO** direct database queries in controllers

### Models
- Define table structure
- Define relationships
- Define scopes
- **NO** HTTP logic
- **NO** HTML output

### Services
- Contain business logic
- Called by controllers
- Can use multiple models
- **NO** request/response handling
- **NO** HTML output

### Views (Blade)
- Display data only
- **NO** business logic
- **NO** database queries
- Use components for repeated UI
- Use layouts for page structure

### Routes
- Map URL → Controller
- Define middleware
- **NO** logic
- **NO** closures with business logic

## Example

```php
// WRONG: Controller with business logic
class BlogController {
    public function index() {
        $posts = DB::table('posts')->where('status', 'published')->get();
        $featured = $posts->first();
        // ... more logic
    }
}

// RIGHT: Controller delegates to Service
class BlogController {
    public function index(BlogService $blog) {
        return view('pages.blog', $blog->getPublishedPosts());
    }
}

class BlogService {
    public function getPublishedPosts() {
        return [
            'posts' => Post::published()->paginate(12),
            'featured' => Post::published()->featured()->first(),
        ];
    }
}
```
