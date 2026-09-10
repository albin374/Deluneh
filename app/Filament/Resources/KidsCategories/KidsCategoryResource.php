<?php

namespace App\Filament\Resources\KidsCategories;

use App\Filament\Resources\KidsCategories\Pages\CreateKidsCategory;
use App\Filament\Resources\KidsCategories\Pages\EditKidsCategory;
use App\Filament\Resources\KidsCategories\Pages\ListKidsCategories;
use App\Filament\Resources\KidsCategories\Schemas\KidsCategoryForm;
use App\Filament\Resources\KidsCategories\Tables\KidsCategoriesTable;
use App\Models\KidsCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KidsCategoryResource extends Resource
{
    protected static ?string $model = KidsCategory::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Categories';
    }

    public static function getNavigationLabel(): string
    {
        return 'Kids Categories';
    }

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return KidsCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KidsCategoriesTable::configure($table);
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
            'index' => ListKidsCategories::route('/'),
            'create' => CreateKidsCategory::route('/create'),
            'edit' => EditKidsCategory::route('/{record}/edit'),
        ];
    }
}
