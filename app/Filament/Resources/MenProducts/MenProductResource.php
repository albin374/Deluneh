<?php

namespace App\Filament\Resources\MenProducts;

use App\Filament\Resources\MenProducts\Pages\CreateMenProduct;
use App\Filament\Resources\MenProducts\Pages\EditMenProduct;
use App\Filament\Resources\MenProducts\Pages\ListMenProducts;
use App\Filament\Resources\MenProducts\Schemas\MenProductForm;
use App\Filament\Resources\MenProducts\Tables\MenProductsTable;
use App\Models\MenProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MenProductResource extends Resource
{
    protected static ?string $model = MenProduct::class;

    public static function getNavigationGroup(): ?string
    {
        return 'All Products';
    }

    public static function getNavigationLabel(): string
    {
        return 'Men\'s Products';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MenProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MenProductsTable::configure($table);
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
            'index' => ListMenProducts::route('/'),
            'create' => CreateMenProduct::route('/create'),
            'edit' => EditMenProduct::route('/{record}/edit'),
        ];
    }
}
