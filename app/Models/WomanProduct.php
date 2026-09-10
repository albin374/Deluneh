<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class WomanProduct extends Product
{
    protected $table = 'products';

    protected static function booted()
    {
        static::addGlobalScope('woman', function (Builder $builder) {
            $builder->whereHas('category', function ($query) {
                $query->where('slug', 'woman')
                      ->orWhereHas('parent', function ($parent) {
                          $parent->where('slug', 'woman');
                      });
            });
        });
    }
}
