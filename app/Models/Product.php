<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
