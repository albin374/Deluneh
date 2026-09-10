<?php

namespace App\Filament\Resources\KidsCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class KidsCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                \Filament\Forms\Components\Select::make('parent_id')
                    ->label('Parent KidsCategory')
                    ->options(\App\Models\KidsCategory::getTreeOptions())
                    ->searchable()
                    ->nullable(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->required(),
            ]);
    }
}
