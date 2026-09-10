<?php

namespace App\Filament\Resources\PlusSizeProducts\Pages;

use App\Filament\Resources\PlusSizeProducts\PlusSizeProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePlusSizeProduct extends CreateRecord
{
    protected static string $resource = PlusSizeProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
