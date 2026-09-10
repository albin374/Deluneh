<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class KidsProduct extends Product
{
    protected $table = 'products';

    protected static function booted()
    {
        static::addGlobalScope('kids', function (Builder $builder) {
            $builder->whereHas('category', function ($query) {
                $query->where('slug', 'kids')
                      ->orWhereHas('parent', function ($parent) {
                          $parent->where('slug', 'kids');
                      });
            });
        });
    }
}
