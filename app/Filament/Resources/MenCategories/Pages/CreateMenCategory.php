<?php

namespace App\Filament\Resources\MenCategories\Pages;

use App\Filament\Resources\MenCategories\MenCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMenCategory extends CreateRecord
{
    protected static string $resource = MenCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
