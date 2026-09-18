<?php

namespace App\Filament\Resources\MobileCoverProducts;

use App\Filament\Resources\MobileCoverProducts\Pages\CreateMobileCoverProduct;
use App\Filament\Resources\MobileCoverProducts\Pages\EditMobileCoverProduct;
use App\Filament\Resources\MobileCoverProducts\Pages\ListMobileCoverProducts;
use App\Filament\Resources\MobileCoverProducts\Pages\ViewMobileCoverProduct;
use App\Filament\Resources\MobileCoverProducts\Schemas\MobileCoverProductForm;
use App\Filament\Resources\MobileCoverProducts\Schemas\MobileCoverProductInfolist;
use App\Filament\Resources\MobileCoverProducts\Tables\MobileCoverProductsTable;
use App\Models\MobileCoverProduct;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MobileCoverProductResource extends Resource
{
    protected static ?string $model = MobileCoverProduct::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Products';
    }

    public static function getNavigationLabel(): string
    {
        return 'Mobile Covers Products';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MobileCoverProductForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MobileCoverProductInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MobileCoverProductsTable::configure($table);
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
            'index' => ListMobileCoverProducts::route('/'),
            'create' => CreateMobileCoverProduct::route('/create'),
            'view' => ViewMobileCoverProduct::route('/{record}'),
            'edit' => EditMobileCoverProduct::route('/{record}/edit'),
        ];
    }
}
