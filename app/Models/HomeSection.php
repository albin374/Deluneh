<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->name)) {
                $model->name = 'Section ' . uniqid();
            }
            if (empty($model->identifier)) {
                $model->identifier = 'section-' . uniqid();
            }
        });
    }

    protected $fillable = ['name', 'identifier', 'show_title', 'is_active', 'sort_order', 'product_ids', 'category_ids', 'images', 'advanced_images', 'videos', 'layout_style', 'is_banner', 'is_timer', 'timer_end_date', 'has_explore_all', 'explore_all_link', 'enable_carousel', 'enable_auto_carousel', 'zoom_out_image', 'banner_sentences'];

    protected $casts = [
        'product_ids' => 'array',
        'category_ids' => 'array',
        'images' => 'array',
        'advanced_images' => 'array',
        'videos' => 'array',
        'banner_sentences' => 'array',
        'show_title' => 'boolean',
        'is_active' => 'boolean',
        'is_banner' => 'boolean',
        'is_timer' => 'boolean',
        'has_explore_all' => 'boolean',
        'enable_carousel' => 'boolean',
        'enable_auto_carousel' => 'boolean',
        'zoom_out_image' => 'boolean',
        'timer_end_date' => 'datetime',
    ];
}
