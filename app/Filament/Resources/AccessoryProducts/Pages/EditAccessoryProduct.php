<?php

namespace App\Filament\Resources\AccessoryProducts\Pages;

use App\Filament\Resources\AccessoryProducts\AccessoryProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAccessoryProduct extends EditRecord
{
    protected static string $resource = AccessoryProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
