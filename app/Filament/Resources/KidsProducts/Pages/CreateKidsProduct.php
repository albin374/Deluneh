<?php

namespace App\Filament\Resources\KidsProducts\Pages;

use App\Filament\Resources\KidsProducts\KidsProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKidsProduct extends CreateRecord
{
    protected static string $resource = KidsProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
