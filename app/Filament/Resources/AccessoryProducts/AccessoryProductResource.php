<?php

namespace App\Filament\Resources\AccessoryProducts;

use App\Filament\Resources\AccessoryProducts\Pages\CreateAccessoryProduct;
use App\Filament\Resources\AccessoryProducts\Pages\EditAccessoryProduct;
use App\Filament\Resources\AccessoryProducts\Pages\ListAccessoryProducts;
use App\Filament\Resources\AccessoryProducts\Schemas\AccessoryProductForm;
use App\Filament\Resources\AccessoryProducts\Tables\AccessoryProductsTable;
use App\Models\AccessoryProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AccessoryProductResource extends Resource
{
    protected static ?string $model = AccessoryProduct::class;

    public static function getNavigationGroup(): ?string
    {
        return 'All Products';
    }

    public static function getNavigationLabel(): string
    {
        return 'Accessories';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AccessoryProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AccessoryProductsTable::configure($table);
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
            'index' => ListAccessoryProducts::route('/'),
            'create' => CreateAccessoryProduct::route('/create'),
            'edit' => EditAccessoryProduct::route('/{record}/edit'),
        ];
    }
}
