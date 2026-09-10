<?php

namespace App\Filament\Resources\AccessoryProducts\Pages;

use App\Filament\Resources\AccessoryProducts\AccessoryProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAccessoryProducts extends ListRecords
{
    protected static string $resource = AccessoryProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
