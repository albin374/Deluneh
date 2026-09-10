<?php

namespace App\Filament\Resources\MarkDownBanners;

use App\Filament\Resources\MarkDownBanners\Pages\CreateMarkDownBanner;
use App\Filament\Resources\MarkDownBanners\Pages\EditMarkDownBanner;
use App\Filament\Resources\MarkDownBanners\Pages\ListMarkDownBanners;
use App\Filament\Resources\MarkDownBanners\Schemas\MarkDownBannerForm;
use App\Filament\Resources\MarkDownBanners\Tables\MarkDownBannersTable;
use App\Models\MarkDownBanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MarkDownBannerResource extends Resource
{
    protected static ?string $model = MarkDownBanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MarkDownBannerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MarkDownBannersTable::configure($table);
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
            'index' => ListMarkDownBanners::route('/'),
            'create' => CreateMarkDownBanner::route('/create'),
            'edit' => EditMarkDownBanner::route('/{record}/edit'),
        ];
    }
}
