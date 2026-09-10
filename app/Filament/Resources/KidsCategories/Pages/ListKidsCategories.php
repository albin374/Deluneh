<?php

namespace App\Filament\Resources\KidsCategories\Pages;

use App\Filament\Resources\KidsCategories\KidsCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKidsCategories extends ListRecords
{
    protected static string $resource = KidsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
