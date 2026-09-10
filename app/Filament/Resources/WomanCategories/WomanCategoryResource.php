<?php

namespace App\Filament\Resources\WomanCategories;

use App\Filament\Resources\WomanCategories\Pages\CreateWomanCategory;
use App\Filament\Resources\WomanCategories\Pages\EditWomanCategory;
use App\Filament\Resources\WomanCategories\Pages\ListWomanCategories;
use App\Filament\Resources\WomanCategories\Schemas\WomanCategoryForm;
use App\Filament\Resources\WomanCategories\Tables\WomanCategoriesTable;
use App\Models\WomanCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WomanCategoryResource extends Resource
{
    protected static ?string $model = WomanCategory::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Categories';
    }

    public static function getNavigationLabel(): string
    {
        return 'Woman Categories';
    }

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return WomanCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WomanCategoriesTable::configure($table);
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
            'index' => ListWomanCategories::route('/'),
            'create' => CreateWomanCategory::route('/create'),
            'edit' => EditWomanCategory::route('/{record}/edit'),
        ];
    }
}
