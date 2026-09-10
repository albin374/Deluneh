<?php

namespace App\Filament\Resources\MenCategories\Pages;

use App\Filament\Resources\MenCategories\MenCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMenCategories extends ListRecords
{
    protected static string $resource = MenCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
