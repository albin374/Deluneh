<?php

namespace App\Filament\Resources\WomanProducts\Pages;

use App\Filament\Resources\WomanProducts\WomanProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWomanProducts extends ListRecords
{
    protected static string $resource = WomanProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
