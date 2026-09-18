<?php

namespace App\Filament\Resources\BestSellers\Pages;

use App\Filament\Resources\BestSellers\BestSellerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBestSeller extends ViewRecord
{
    protected static string $resource = BestSellerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
