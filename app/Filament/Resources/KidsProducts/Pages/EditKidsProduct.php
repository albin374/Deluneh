<?php

namespace App\Filament\Resources\KidsProducts\Pages;

use App\Filament\Resources\KidsProducts\KidsProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKidsProduct extends EditRecord
{
    protected static string $resource = KidsProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
