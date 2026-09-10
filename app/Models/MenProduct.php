<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class MenProduct extends Product
{
    protected $table = 'products';

    protected static function booted()
    {
        static::addGlobalScope('men', function (Builder $builder) {
            $categoryIds = \App\Models\Category::getAllDescendantIdsBySlug('men');
            $builder->whereIn('category_id', $categoryIds);
        });
    }
}
