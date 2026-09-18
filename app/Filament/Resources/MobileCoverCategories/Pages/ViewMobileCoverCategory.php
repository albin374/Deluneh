<?php

namespace App\Filament\Resources\MobileCoverCategories\Pages;

use App\Filament\Resources\MobileCoverCategories\MobileCoverCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMobileCoverCategory extends ViewRecord
{
    protected static string $resource = MobileCoverCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
