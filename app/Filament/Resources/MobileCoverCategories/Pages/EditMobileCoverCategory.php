<?php

namespace App\Filament\Resources\MobileCoverCategories\Pages;

use App\Filament\Resources\MobileCoverCategories\MobileCoverCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMobileCoverCategory extends EditRecord
{
    protected static string $resource = MobileCoverCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
