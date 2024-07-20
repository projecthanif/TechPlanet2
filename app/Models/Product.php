<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
        'category_id',
        'brand_id',
        'weight',
        'color',
        'image_url',
        'gallery_url',
        'sale_price',
        'sale_start_date',
        'sale_end_date',
        'stock_status'
    ];

    public function casts()
    {
        return [
          'gallery_url' => 'array'
        ];
    }


    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function inventory():BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }

    public function cartItem():BelongsTo
    {
        return $this->belongsTo(CartItem::class);
    }
}
