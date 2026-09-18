<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficialMerchImage extends Model
{
    protected $fillable = ['images', 'link', 'style', 'sort_order', 'is_active'];

    protected $casts = [
        'images' => 'array',
    ];
}
