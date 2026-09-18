<?php

namespace App\Filament\Resources\OfficialMerchImages\Pages;

use App\Filament\Resources\OfficialMerchImages\OfficialMerchImageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOfficialMerchImage extends EditRecord
{
    protected static string $resource = OfficialMerchImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
