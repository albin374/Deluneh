<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class MobileCoverProduct extends Product
{
    protected $table = 'products';

    protected static function booted()
    {
        static::addGlobalScope('mobile-covers', function (Builder $builder) {
            $categoryIds = \App\Models\Category::getAllDescendantIdsBySlug('mobile-covers');
            $builder->whereIn('category_id', $categoryIds);
        });
    }
}
