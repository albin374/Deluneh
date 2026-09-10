<?php

namespace App\Filament\Resources\KidsProducts;

use App\Filament\Resources\KidsProducts\Pages\CreateKidsProduct;
use App\Filament\Resources\KidsProducts\Pages\EditKidsProduct;
use App\Filament\Resources\KidsProducts\Pages\ListKidsProducts;
use App\Filament\Resources\KidsProducts\Schemas\KidsProductForm;
use App\Filament\Resources\KidsProducts\Tables\KidsProductsTable;
use App\Models\KidsProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KidsProductResource extends Resource
{
    protected static ?string $model = KidsProduct::class;

    public static function getNavigationGroup(): ?string
    {
        return 'All Products';
    }

    public static function getNavigationLabel(): string
    {
        return 'Kids\' Products';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return KidsProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KidsProductsTable::configure($table);
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
            'index' => ListKidsProducts::route('/'),
            'create' => CreateKidsProduct::route('/create'),
            'edit' => EditKidsProduct::route('/{record}/edit'),
        ];
    }
}
