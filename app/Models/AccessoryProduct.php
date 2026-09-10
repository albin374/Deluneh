<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class AccessoryProduct extends Product
{
    protected $table = 'products';

    protected static function booted()
    {
        static::addGlobalScope('accessories', function (Builder $builder) {
            $categoryIds = \App\Models\Category::getAllDescendantIdsBySlug('accessories');
            // Include 'all-accessories' just in case that's the slug used.
            $additionalCategoryIds = \App\Models\Category::getAllDescendantIdsBySlug('all-accessories');
            $allIds = array_unique(array_merge($categoryIds, $additionalCategoryIds));
            
            if (empty($allIds)) {
                // If neither category exists yet, prevent finding any records rather than erroring out
                $builder->where('id', '<', 0);
            } else {
                $builder->whereIn('category_id', $allIds);
            }
        });
    }
}
