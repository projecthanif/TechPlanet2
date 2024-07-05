<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    protected function casts()
    {
        return [
          'tags' => 'array'
        ];
    }
}
