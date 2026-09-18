<?php

namespace App\Filament\Resources\WalletProducts\Pages;

use App\Filament\Resources\WalletProducts\WalletProductResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWalletProduct extends EditRecord
{
    protected static string $resource = WalletProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
