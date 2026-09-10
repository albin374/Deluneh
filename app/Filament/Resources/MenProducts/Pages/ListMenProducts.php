<?php

namespace App\Filament\Resources\MenProducts\Pages;

use App\Filament\Resources\MenProducts\MenProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMenProducts extends ListRecords
{
    protected static string $resource = MenProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
