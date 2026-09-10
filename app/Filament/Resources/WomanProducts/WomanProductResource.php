<?php

namespace App\Filament\Resources\WomanProducts;

use App\Filament\Resources\WomanProducts\Pages\CreateWomanProduct;
use App\Filament\Resources\WomanProducts\Pages\EditWomanProduct;
use App\Filament\Resources\WomanProducts\Pages\ListWomanProducts;
use App\Filament\Resources\WomanProducts\Schemas\WomanProductForm;
use App\Filament\Resources\WomanProducts\Tables\WomanProductsTable;
use App\Models\WomanProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WomanProductResource extends Resource
{
    protected static ?string $model = WomanProduct::class;

    public static function getNavigationGroup(): ?string
    {
        return 'All Products';
    }

    public static function getNavigationLabel(): string
    {
        return 'Women\'s Products';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return WomanProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WomanProductsTable::configure($table);
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
            'index' => ListWomanProducts::route('/'),
            'create' => CreateWomanProduct::route('/create'),
            'edit' => EditWomanProduct::route('/{record}/edit'),
        ];
    }
}
