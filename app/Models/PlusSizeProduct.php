<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class PlusSizeProduct extends Product
{
    protected $table = 'products';

    protected static function booted()
    {
        static::addGlobalScope('plus-size', function (Builder $builder) {
            $categoryIds = \App\Models\Category::getAllDescendantIdsBySlug('plus-size');
            $builder->whereIn('category_id', $categoryIds);
        });
    }
}
