<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'parent_id', 'is_active', 'sort_order'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    
    public function descendants()
    {
        return $this->children()->with('descendants');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getHierarchicalNameAttribute()
    {
        if ($this->parent) {
            return $this->parent->hierarchical_name . ' > ' . $this->name;
        }

        return $this->name;
    }

    public function getDepthAttribute()
    {
        $depth = 0;
        $parent = $this->parent;
        while ($parent) {
            $depth++;
            $parent = $parent->parent;
        }
        return $depth;
    }

    public static function getTreeOptions()
    {
        $categories = static::with('parent')->get();
        
        $options = [];
        foreach ($categories as $category) {
            $options[$category->id] = $category->hierarchical_name;
        }

        // Sort options alphabetically
        asort($options);

        return $options;
    }

    public static function getAllDescendantIdsBySlug($slug)
    {
        $category = static::where('slug', $slug)->with('descendants')->first();
        if (!$category) {
            return [];
        }
        return $category->getAllDescendantIds();
    }

    public function getAllDescendantIds()
    {
        $ids = [$this->id];
        foreach ($this->children as $child) {
            $ids = array_merge($ids, $child->getAllDescendantIds());
        }
        return $ids;
    }
}
