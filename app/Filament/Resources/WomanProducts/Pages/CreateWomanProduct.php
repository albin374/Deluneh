<?php

namespace App\Filament\Resources\WomanProducts\Pages;

use App\Filament\Resources\WomanProducts\WomanProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWomanProduct extends CreateRecord
{
    protected static string $resource = WomanProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
