<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($path)
    {
        $slugs = explode('/', $path);
        $slug = end($slugs); // fallback slug

        $currentCategory = null;
        $parent = null;

        foreach ($slugs as $segment) {
            $query = \App\Models\Category::where('is_active', true);
            if ($parent) {
                $query->where('parent_id', $parent->id)->where(function($q) use ($segment) {
                    $q->where('slug', $segment)
                      ->orWhere('slug', 'like', '%' . $segment . '%')
                      ->orWhere('name', 'like', $segment);
                });
            } else {
                $query->whereNull('parent_id')
                      ->whereRaw('TRIM(slug) = ?', [trim($segment)]);
            }
            $found = $query->first();
            if (!$found) {
                $currentCategory = null;
                break;
            }
            $currentCategory = $found;
            $parent = $found;
        }

        // Fallback to old behavior if hierarchical lookup fails
        if (!$currentCategory) {
            $currentCategory = \App\Models\Category::where('slug', $slug)->where('is_active', true)->first();
        } else {
            // Update slug to the resolved category's slug to prevent false aggregation
            $slug = $currentCategory->slug;
        }

        $categoryIds = [];

        // Define generic aggregates
        $isAggregate = in_array(strtolower($slug), ['footwear', 'bags', 'plus-size', 'accessories', 'official-merch', 'sneakers', 'best-sellers', 'mark-downs', 'juniors', 'wallets', 'mobile-covers']);

        if (!$currentCategory && !$isAggregate) {
            abort(404);
        }

        if ($currentCategory) {
            $categoryIds = $this->getAllCategoryIds($currentCategory);
        }

        if (strtolower($slug) === 'footwear') {
            $extraCategoryIds = \App\Models\Category::where('name', 'like', '%footwear%')->pluck('id')->toArray();
            $categoryIds = array_unique(array_merge($categoryIds, $extraCategoryIds));
            foreach ($extraCategoryIds as $addId) {
                $addCat = \App\Models\Category::find($addId);
                if ($addCat) {
                    $categoryIds = array_unique(array_merge($categoryIds, $this->getAllCategoryIds($addCat)));
                }
            }
        }

        if (strtolower($slug) === 'bags') {
            $extraCategoryIds = \App\Models\Category::where('name', 'like', '%bags%')->pluck('id')->toArray();
            $categoryIds = array_unique(array_merge($categoryIds, $extraCategoryIds));
            foreach ($extraCategoryIds as $addId) {
                $addCat = \App\Models\Category::find($addId);
                if ($addCat) {
                    $categoryIds = array_unique(array_merge($categoryIds, $this->getAllCategoryIds($addCat)));
                }
            }
        }

        if (strtolower($slug) === 'sneakers') {
            $extraCategoryIds = \App\Models\Category::where(function($q) {
                $q->where('name', 'like', '%sneaker%')
                  ->orWhere('slug', 'like', '%sneaker%')
                  ->orWhere('name', 'like', '%footwear%')
                  ->orWhere('slug', 'like', '%footwear%');
            })->pluck('id')->toArray();
            $categoryIds = array_unique(array_merge($categoryIds, $extraCategoryIds));
            foreach ($extraCategoryIds as $addId) {
                $addCat = \App\Models\Category::find($addId);
                if ($addCat) {
                    $categoryIds = array_unique(array_merge($categoryIds, $this->getAllCategoryIds($addCat)));
                }
            }
        }

        if (!$currentCategory) {
            $currentCategory = new \App\Models\Category([
                'name' => ucfirst($slug),
                'slug' => strtolower($slug)
            ]);
            $currentCategory->setRelation('children', collect([]));
        }

        if (strtolower($slug) === 'best-sellers') {
            $products = \App\Models\BestSeller::with('product')
                ->orderBy('sort_order')
                ->get()
                ->pluck('product')
                ->filter(function ($product) {
                    return $product && $product->is_active;
                });
        } else {
            $products = \App\Models\Product::whereIn('category_id', $categoryIds)
                ->where('is_active', true)
                ->get();
        }
            
        $categories = \App\Models\Category::where('is_active', true)->whereNull('parent_id')->get();

        $markdownBanners = collect();
        if (strtolower($slug) === 'mark-downs') {
            $markdownBanners = \App\Models\MarkDownBanner::where('is_active', true)->orderBy('sort_order')->get();
        }

        $officialMerchImages = collect();
        if (strtolower($slug) === 'official-merch') {
            $officialMerchImages = \App\Models\OfficialMerchImage::where('is_active', true)->orderBy('sort_order')->get();
        }

        return view('website.product', compact('products', 'categories', 'currentCategory', 'markdownBanners', 'officialMerchImages'));
    }

    private function getAllCategoryIds($category)
    {
        $ids = [$category->id];
        foreach ($category->children as $child) {
            $ids = array_merge($ids, $this->getAllCategoryIds($child));
        }
        return $ids;
    }
}
