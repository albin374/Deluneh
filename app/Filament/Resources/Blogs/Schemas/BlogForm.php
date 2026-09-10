<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('heading')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\DatePicker::make('date'),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('blog-images')
                    ->columnSpanFull(),
                \Filament\Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                \Filament\Forms\Components\Repeater::make('points')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('heading')
                            ->required()
                            ->maxLength(255),
                        \Filament\Forms\Components\Textarea::make('description')
                            ->maxLength(65535),
                        \Filament\Forms\Components\FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('blog-points'),
                    ])
                    ->maxItems(5)
                    ->columnSpanFull()
            ]);
    }
}
