<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', \App\Models\Product::count())
                ->description('All products in the store')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('primary'),
            Stat::make('Orders Received', \App\Models\Order::count())
                ->description('Total orders placed')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('success'),
            Stat::make('Categories', \App\Models\Category::count())
                ->description('Total categories available')
                ->descriptionIcon('heroicon-m-tag')
                ->color('info'),
        ];
    }
}
