<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarkDownBanner extends Model
{
    protected $fillable = ['image', 'link', 'is_active', 'sort_order', 'orientation'];
}
