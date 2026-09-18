<?php

namespace App\Filament\Resources\MobileCoverCategories\Pages;

use App\Filament\Resources\MobileCoverCategories\MobileCoverCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMobileCoverCategories extends ListRecords
{
    protected static string $resource = MobileCoverCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
