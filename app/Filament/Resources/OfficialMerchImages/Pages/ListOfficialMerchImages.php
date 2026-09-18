<?php

namespace App\Filament\Resources\OfficialMerchImages\Pages;

use App\Filament\Resources\OfficialMerchImages\OfficialMerchImageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOfficialMerchImages extends ListRecords
{
    protected static string $resource = OfficialMerchImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
