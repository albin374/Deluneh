<?php

namespace App\Filament\Resources\PlusSizeProducts;

use App\Filament\Resources\PlusSizeProducts\Pages\CreatePlusSizeProduct;
use App\Filament\Resources\PlusSizeProducts\Pages\EditPlusSizeProduct;
use App\Filament\Resources\PlusSizeProducts\Pages\ListPlusSizeProducts;
use App\Filament\Resources\PlusSizeProducts\Schemas\PlusSizeProductForm;
use App\Filament\Resources\PlusSizeProducts\Tables\PlusSizeProductsTable;
use App\Models\PlusSizeProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlusSizeProductResource extends Resource
{
    protected static ?string $model = PlusSizeProduct::class;

    public static function getNavigationGroup(): ?string
    {
        return 'All Products';
    }

    public static function getNavigationLabel(): string
    {
        return 'Plus Size Products';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PlusSizeProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlusSizeProductsTable::configure($table);
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
            'index' => ListPlusSizeProducts::route('/'),
            'create' => CreatePlusSizeProduct::route('/create'),
            'edit' => EditPlusSizeProduct::route('/{record}/edit'),
        ];
    }
}
