<?php

namespace App\Filament\Resources\MenProducts\Pages;

use App\Filament\Resources\MenProducts\MenProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMenProduct extends CreateRecord
{
    protected static string $resource = MenProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
