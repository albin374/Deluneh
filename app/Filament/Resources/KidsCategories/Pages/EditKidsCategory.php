<?php

namespace App\Filament\Resources\KidsCategories\Pages;

use App\Filament\Resources\KidsCategories\KidsCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKidsCategory extends EditRecord
{
    protected static string $resource = KidsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
