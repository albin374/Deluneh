<?php

namespace App\Filament\Resources\WomanCategories\Pages;

use App\Filament\Resources\WomanCategories\WomanCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWomanCategory extends CreateRecord
{
    protected static string $resource = WomanCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
