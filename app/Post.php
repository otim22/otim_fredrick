<?php

namespace App;

// use App\Concern\Likeable;
use App\Scopes\PostedScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Post extends Model
{
    // use Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id',
        'title',
        'content',
        'posted_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'posted_at'
    ];

    // /**
    //  * The "booting" method of the model.
    //  */
    // public static function boot(): void
    // {
    //     parent::boot();
    //     static::addGlobalScope(new PostedScope);
    // }

    /**
     * Scope a query to search posts
     */
    public function scopeSearch(Builder $query, ?string $search)
    {
        if ($search) {
            return $query->where('title', 'LIKE', "%{$search}%");
        }
    }

    /**
     * Scope a query to order posts by latest posted
     */
    public function scopeLatest(Builder $query): Builder
    {
        return $query->orderBy('posted_at', 'desc');
    }

    /**
     * Scope a query to only include posts posted last month.
     */
    public function scopeLastMonth(Builder $query, int $limit = 5): Builder
    {
        return $query->whereBetween('posted_at', [Carbon::now()->subMonth(), Carbon::now()])
                     ->latest()
                     ->limit($limit);
    }

    /**
     * Scope a query to only include posts posted last week.
     */
    public function scopeLastWeek(Builder $query): Builder
    {
        return $query->whereBetween('posted_at', [Carbon::now()->subWeek(), Carbon::now()])
                        ->latest();
    }

    /**
     * Return the post's author
     */
    public function author(): BelongsTo
    {
        return $this->belongTo(User::class, 'author_id');
    }

    /**
     * Return the post's comments
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * return the excerpt of the post content
     */
    public function excerpt(int $length = 50): string
    {
        return str_limit($this->content, $length);
    }

}
