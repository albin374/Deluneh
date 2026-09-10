<?php

namespace App\Filament\Resources\SiteNotifications\Schemas;

use Filament\Schemas\Schema;

class SiteNotificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public'),
                \Filament\Forms\Components\Textarea::make('text')
                    ->maxLength(65535),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
