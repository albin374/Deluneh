<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class MobileCoverCategory extends Category
{
    protected $table = 'categories';

    protected static function booted()
    {
        static::addGlobalScope('mobile-covers', function (Builder $builder) {
            $builder->where(function ($q) {
                $q->whereRaw('TRIM(slug) = ?', ['mobile-covers'])
                  ->orWhereHas('parent', function ($parent) {
                      $parent->whereRaw('TRIM(slug) = ?', ['mobile-covers']);
                  });
            });
        });
    }
}
