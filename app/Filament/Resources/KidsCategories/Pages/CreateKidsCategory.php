<?php

namespace App\Filament\Resources\KidsCategories\Pages;

use App\Filament\Resources\KidsCategories\KidsCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKidsCategory extends CreateRecord
{
    protected static string $resource = KidsCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
