<?php

namespace App\Filament\Resources\WomanProducts\Pages;

use App\Filament\Resources\WomanProducts\WomanProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWomanProduct extends EditRecord
{
    protected static string $resource = WomanProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
