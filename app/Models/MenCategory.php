<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class MenCategory extends Category
{
    protected $table = 'categories';

    protected static function booted()
    {
        static::addGlobalScope('men', function (Builder $builder) {
            $builder->where(function ($q) {
                $q->whereRaw('TRIM(slug) = ?', ['men'])
                  ->orWhereHas('parent', function ($parent) {
                      $parent->whereRaw('TRIM(slug) = ?', ['men']);
                  });
            });
        });
    }
}