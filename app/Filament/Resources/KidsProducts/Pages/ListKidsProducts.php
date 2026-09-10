<?php

namespace App\Filament\Resources\KidsProducts\Pages;

use App\Filament\Resources\KidsProducts\KidsProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKidsProducts extends ListRecords
{
    protected static string $resource = KidsProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
