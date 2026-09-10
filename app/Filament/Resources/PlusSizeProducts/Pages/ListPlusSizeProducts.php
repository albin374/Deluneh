<?php

namespace App\Filament\Resources\PlusSizeProducts\Pages;

use App\Filament\Resources\PlusSizeProducts\PlusSizeProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlusSizeProducts extends ListRecords
{
    protected static string $resource = PlusSizeProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
