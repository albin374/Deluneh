<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class WomanCategory extends Category
{
    protected $table = 'categories';

    protected static function booted()
    {
        static::addGlobalScope('woman ', function (Builder $builder) {
            $builder->where(function ($q) {
                $q->whereRaw('TRIM(slug) = ?', ['woman'])
                  ->orWhereHas('parent', function ($parent) {
                      $parent->whereRaw('TRIM(slug) = ?', ['woman']);
                  });
            });
        });
    }
}