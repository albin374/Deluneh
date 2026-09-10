<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class PlusSizeCategory extends Category
{
    protected $table = 'categories';

    protected static function booted()
    {
        static::addGlobalScope('plus-size', function (Builder $builder) {
            $builder->where(function ($q) {
                $q->whereRaw('TRIM(slug) = ?', ['plus-size'])
                  ->orWhereHas('parent', function ($parent) {
                      $parent->whereRaw('TRIM(slug) = ?', ['plus-size']);
                  });
            });
        });
    }
}
