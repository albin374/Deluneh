<?php

namespace App\Filament\Resources\MobileCoverCategories;

use App\Filament\Resources\MobileCoverCategories\Pages\CreateMobileCoverCategory;
use App\Filament\Resources\MobileCoverCategories\Pages\EditMobileCoverCategory;
use App\Filament\Resources\MobileCoverCategories\Pages\ListMobileCoverCategories;
use App\Filament\Resources\MobileCoverCategories\Pages\ViewMobileCoverCategory;
use App\Filament\Resources\MobileCoverCategories\Schemas\MobileCoverCategoryForm;
use App\Filament\Resources\MobileCoverCategories\Schemas\MobileCoverCategoryInfolist;
use App\Filament\Resources\MobileCoverCategories\Tables\MobileCoverCategoriesTable;
use App\Models\MobileCoverCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MobileCoverCategoryResource extends Resource
{
    protected static ?string $model = MobileCoverCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function getNavigationGroup(): ?string
    {
        return 'Categories';
    }

    public static function getNavigationLabel(): string
    {
        return 'Mobile Covers Categories';
    }

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MobileCoverCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MobileCoverCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MobileCoverCategoriesTable::configure($table);
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
            'index' => ListMobileCoverCategories::route('/'),
            'create' => CreateMobileCoverCategory::route('/create'),
            'view' => ViewMobileCoverCategory::route('/{record}'),
            'edit' => EditMobileCoverCategory::route('/{record}/edit'),
        ];
    }
}
