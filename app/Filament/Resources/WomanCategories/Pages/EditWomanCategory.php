<?php

namespace App\Filament\Resources\WomanCategories\Pages;

use App\Filament\Resources\WomanCategories\WomanCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWomanCategory extends EditRecord
{
    protected static string $resource = WomanCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
