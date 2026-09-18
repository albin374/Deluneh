<?php

namespace App\Filament\Resources\MobileCoverProducts\Pages;

use App\Filament\Resources\MobileCoverProducts\MobileCoverProductResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMobileCoverProduct extends EditRecord
{
    protected static string $resource = MobileCoverProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
