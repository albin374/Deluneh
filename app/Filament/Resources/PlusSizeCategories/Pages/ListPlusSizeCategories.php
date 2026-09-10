<?php

namespace App\Filament\Resources\PlusSizeCategories\Pages;

use App\Filament\Resources\PlusSizeCategories\PlusSizeCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlusSizeCategories extends ListRecords
{
    protected static string $resource = PlusSizeCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
