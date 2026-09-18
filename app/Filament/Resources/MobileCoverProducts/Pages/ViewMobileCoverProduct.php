<?php

namespace App\Filament\Resources\MobileCoverProducts\Pages;

use App\Filament\Resources\MobileCoverProducts\MobileCoverProductResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMobileCoverProduct extends ViewRecord
{
    protected static string $resource = MobileCoverProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
