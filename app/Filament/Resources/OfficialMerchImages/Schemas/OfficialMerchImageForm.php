<?php

namespace App\Filament\Resources\OfficialMerchImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class OfficialMerchImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('images')
                    ->image()
                    ->multiple()
                    ->maxFiles(8)
                    ->disk('public')
                    ->directory('official-merch-images')
                    ->required(),
                TextInput::make('link')
                    ->default(null),
                \Filament\Forms\Components\Select::make('style')
                    ->options([
                        'banner' => 'Banner (1 Image Full Width)',
                        'carousel' => 'Carousel (Moves like a slider)',
                        'grid-2' => '2 in a row (Grid)',
                    ])
                    ->required()
                    ->default('banner'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
