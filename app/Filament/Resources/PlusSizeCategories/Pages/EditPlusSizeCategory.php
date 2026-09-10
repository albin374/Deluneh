<?php

namespace App\Filament\Resources\PlusSizeCategories\Pages;

use App\Filament\Resources\PlusSizeCategories\PlusSizeCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlusSizeCategory extends EditRecord
{
    protected static string $resource = PlusSizeCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
