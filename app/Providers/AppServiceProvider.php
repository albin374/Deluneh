<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::composer('website.*', function ($view) {
            $globalCategories = \App\Models\Category::whereNull('parent_id')
                ->where('is_active', true)
                ->with('descendants')
                ->get();
            $view->with('globalCategories', $globalCategories);
        });
    }
}
