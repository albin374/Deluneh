<?php

namespace App\Filament\Resources\WalletProducts;

use App\Filament\Resources\WalletProducts\Pages\CreateWalletProduct;
use App\Filament\Resources\WalletProducts\Pages\EditWalletProduct;
use App\Filament\Resources\WalletProducts\Pages\ListWalletProducts;
use App\Filament\Resources\WalletProducts\Pages\ViewWalletProduct;
use App\Filament\Resources\WalletProducts\Schemas\WalletProductForm;
use App\Filament\Resources\WalletProducts\Schemas\WalletProductInfolist;
use App\Filament\Resources\WalletProducts\Tables\WalletProductsTable;
use App\Models\WalletProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WalletProductResource extends Resource
{
    protected static ?string $model = WalletProduct::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Products';
    }

    public static function getNavigationLabel(): string
    {
        return 'Wallets Products';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return WalletProductForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WalletProductInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WalletProductsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWalletProducts::route('/'),
            'create' => CreateWalletProduct::route('/create'),
            'view' => ViewWalletProduct::route('/{record}'),
            'edit' => EditWalletProduct::route('/{record}/edit'),
        ];
    }
}
