<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'price', 'discount_price', 'category_id', 'is_active', 'images', 'sizes', 'material_care', 'country_of_origin', 'color'];

    protected $casts = [
        'images' => 'array',
        'sizes' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
