<?php

namespace App\Filament\Resources\WalletProducts\Pages;

use App\Filament\Resources\WalletProducts\WalletProductResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWalletProduct extends ViewRecord
{
    protected static string $resource = WalletProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
