<?php

namespace App\Filament\Resources\PlusSizeCategories\Pages;

use App\Filament\Resources\PlusSizeCategories\PlusSizeCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePlusSizeCategory extends CreateRecord
{
    protected static string $resource = PlusSizeCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
