<?php

namespace App\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        // Core
        'title',
        'slug',
        'excerpt',
        'body',
        'featured_image',
        'status',           // draft, published, archived
        'published_at',

        // SEO
        'meta_title',       // Title tag override (max 60 chars)
        'meta_description', // Meta description override (max 160 chars)
        'og_title',         // Open Graph title
        'og_description',   // Open Graph description
        'og_image',         // Open Graph image URL
        'canonical_url',    // Canonical URL if duplicate content
        'focus_keyword',    // Primary keyword targeting

        // Relations
        'category_id',
        'author_id',

        // Analytics
        'views_count',
        'reading_time',     // Estimated minutes to read

        // Display
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured'  => 'boolean',
        'views_count'  => 'integer',
        'reading_time' => 'integer',
        'sort_order'   => 'integer',
        'category_id'  => 'integer',
        'author_id'    => 'integer',
    ];

    protected $dates = ['published_at'];

    // ---- Scopes ----

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->where('published_at', '<=', now());
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // ---- Accessors ----

    public function getMetaTitleAttribute(): string
    {
        return $this->attributes['meta_title'] ?? $this->title;
    }

    public function getMetaDescriptionAttribute(): string
    {
        return $this->attributes['meta_description'] ?? $this->excerpt;
    }

    public function getOgTitleAttribute(): string
    {
        return $this->attributes['og_title'] ?? $this->title;
    }

    public function getOgDescriptionAttribute(): string
    {
        return $this->attributes['og_description'] ?? $this->excerpt;
    }

    public function getOgImageAttribute(): ?string
    {
        return $this->attributes['og_image'] ?? $this->featured_image;
    }

    // ---- Relations ----

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'author_id');
    }

    // ---- Helpers ----

    public function incrementViews(): void
    {
        $this->increment('views_count');
    }

    public function isPublished(): bool
    {
        return $this->status === 'published' && $this->published_at <= now();
    }

    public function isDraft(): bool
    {
        return $this->status === 'draft';
    }

    /**
     * Auto-calculate reading time based on word count.
     * Average reading speed: 200 words per minute.
     */
    public function calculateReadingTime(): int
    {
        $wordCount = str_word_count(strip_tags($this->body));
        return max(1, (int) ceil($wordCount / 200));
    }
}
