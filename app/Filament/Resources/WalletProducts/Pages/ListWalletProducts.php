<?php

namespace App\Filament\Resources\WalletProducts\Pages;

use App\Filament\Resources\WalletProducts\WalletProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWalletProducts extends ListRecords
{
    protected static string $resource = WalletProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
