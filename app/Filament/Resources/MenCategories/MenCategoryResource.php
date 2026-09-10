<?php

namespace App\Filament\Resources\MenCategories;

use App\Filament\Resources\MenCategories\Pages\CreateMenCategory;
use App\Filament\Resources\MenCategories\Pages\EditMenCategory;
use App\Filament\Resources\MenCategories\Pages\ListMenCategories;
use App\Filament\Resources\MenCategories\Schemas\MenCategoryForm;
use App\Filament\Resources\MenCategories\Tables\MenCategoriesTable;
use App\Models\MenCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MenCategoryResource extends Resource
{
    protected static ?string $model = MenCategory::class;

    public static function getNavigationGroup(): ?string
    {
        return 'Categories';
    }

    public static function getNavigationLabel(): string
    {
        return 'Men Categories';
    }

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return MenCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MenCategoriesTable::configure($table);
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
            'index' => ListMenCategories::route('/'),
            'create' => CreateMenCategory::route('/create'),
            'edit' => EditMenCategory::route('/{record}/edit'),
        ];
    }
}
