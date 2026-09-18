<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class WalletProduct extends Product
{
    protected $table = 'products';

    protected static function booted()
    {
        static::addGlobalScope('wallets', function (Builder $builder) {
            $categoryIds = \App\Models\Category::getAllDescendantIdsBySlug('wallets');
            $builder->whereIn('category_id', $categoryIds);
        });
    }
}
