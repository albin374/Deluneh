<?php

namespace App\Filament\Resources\SiteNotifications;

use App\Filament\Resources\SiteNotifications\Pages\CreateSiteNotification;
use App\Filament\Resources\SiteNotifications\Pages\EditSiteNotification;
use App\Filament\Resources\SiteNotifications\Pages\ListSiteNotifications;
use App\Filament\Resources\SiteNotifications\Schemas\SiteNotificationForm;
use App\Filament\Resources\SiteNotifications\Tables\SiteNotificationsTable;
use App\Models\SiteNotification;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SiteNotificationResource extends Resource
{
    protected static ?string $model = SiteNotification::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SiteNotificationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SiteNotificationsTable::configure($table);
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
            'index' => ListSiteNotifications::route('/'),
            'create' => CreateSiteNotification::route('/create'),
            'edit' => EditSiteNotification::route('/{record}/edit'),
        ];
    }
}
