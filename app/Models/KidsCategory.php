<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class KidsCategory extends Category
{
    protected $table = 'categories';

    protected static function booted()
    {
        static::addGlobalScope('kids', function (Builder $builder) {
            $builder->where(function ($q) {
                $q->whereRaw('TRIM(slug) = ?', ['kids'])
                  ->orWhereHas('parent', function ($parent) {
                      $parent->whereRaw('TRIM(slug) = ?', ['kids']);
                  });
            });
        });
    }
}