<?php

namespace App\Filament\Resources\MenCategories\Pages;

use App\Filament\Resources\MenCategories\MenCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMenCategory extends EditRecord
{
    protected static string $resource = MenCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
