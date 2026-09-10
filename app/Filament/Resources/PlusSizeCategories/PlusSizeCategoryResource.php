<?php

namespace App\Filament\Resources\PlusSizeCategories;

use App\Filament\Resources\PlusSizeCategories\Pages\CreatePlusSizeCategory;
use App\Filament\Resources\PlusSizeCategories\Pages\EditPlusSizeCategory;
use App\Filament\Resources\PlusSizeCategories\Pages\ListPlusSizeCategories;
use App\Filament\Resources\PlusSizeCategories\Schemas\PlusSizeCategoryForm;
use App\Filament\Resources\PlusSizeCategories\Tables\PlusSizeCategoriesTable;
use App\Models\PlusSizeCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlusSizeCategoryResource extends Resource
{
    protected static ?string $model = PlusSizeCategory::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Categories';
    }

    public static function getNavigationLabel(): string
    {
        return 'Plus Size Categories';
    }

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PlusSizeCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlusSizeCategoriesTable::configure($table);
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
            'index' => ListPlusSizeCategories::route('/'),
            'create' => CreatePlusSizeCategory::route('/create'),
            'edit' => EditPlusSizeCategory::route('/{record}/edit'),
        ];
    }
}
