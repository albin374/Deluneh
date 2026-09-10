<?php

namespace App\Filament\Resources\WomanCategories\Pages;

use App\Filament\Resources\WomanCategories\WomanCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWomanCategories extends ListRecords
{
    protected static string $resource = WomanCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
