<?php

namespace App\Filament\Resources\PlusSizeProducts\Pages;

use App\Filament\Resources\PlusSizeProducts\PlusSizeProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlusSizeProduct extends EditRecord
{
    protected static string $resource = PlusSizeProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
