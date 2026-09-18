<?php

namespace App\Filament\Resources\MobileCoverProducts\Pages;

use App\Filament\Resources\MobileCoverProducts\MobileCoverProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMobileCoverProducts extends ListRecords
{
    protected static string $resource = MobileCoverProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
