<?php

namespace App\Filament\Resources\OfficialMerchImages;

use App\Filament\Resources\OfficialMerchImages\Pages\CreateOfficialMerchImage;
use App\Filament\Resources\OfficialMerchImages\Pages\EditOfficialMerchImage;
use App\Filament\Resources\OfficialMerchImages\Pages\ListOfficialMerchImages;
use App\Filament\Resources\OfficialMerchImages\Schemas\OfficialMerchImageForm;
use App\Filament\Resources\OfficialMerchImages\Tables\OfficialMerchImagesTable;
use App\Models\OfficialMerchImage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OfficialMerchImageResource extends Resource
{
    protected static ?string $model = OfficialMerchImage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return OfficialMerchImageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OfficialMerchImagesTable::configure($table);
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
            'index' => ListOfficialMerchImages::route('/'),
            'create' => CreateOfficialMerchImage::route('/create'),
            'edit' => EditOfficialMerchImage::route('/{record}/edit'),
        ];
    }
}
