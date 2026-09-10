<?php

namespace App\Filament\Resources\MenProducts\Pages;

use App\Filament\Resources\MenProducts\MenProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMenProduct extends EditRecord
{
    protected static string $resource = MenProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
