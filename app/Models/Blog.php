<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'published_at',
        'status',
        'category_id',
        'tags',
        'excerpt',
        'slug',
        'image_url',
        'view_count',
    ];


    protected function casts(): array
    {
        return [
            'tags' => 'array'
        ];
    }


    public function blogCategory(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }

}
