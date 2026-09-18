<?php

namespace App\Filament\Resources\WalletProducts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class WalletProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('discount_price')
                    ->numeric()
                    ->default(null)
                    ->prefix('$'),
                \Filament\Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->options(function () {
                        return \App\Models\Category::where('slug', 'wallets')->pluck('name', 'id');
                    })
                    ->searchable()
                    ->required(),

                Toggle::make('is_active')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('images')
                    ->multiple()
                    ->maxFiles(6)
                    ->image()
                    ->disk('public')
                    ->directory('products')
                    ->columnSpanFull(),
                TextInput::make('material_care')
                    ->label('Material & Care')
                    ->default(null),
                TextInput::make('color')
                    ->label('Color')
                    ->default(null),
                TextInput::make('country_of_origin')
                    ->label('Country of Origin')
                    ->default('India (and proud)'),
            ]);
    }
}
