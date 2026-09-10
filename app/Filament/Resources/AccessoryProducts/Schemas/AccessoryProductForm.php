<?php

namespace App\Filament\Resources\AccessoryProducts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AccessoryProductForm
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
                    ->label('Category (Men/Women/Kids Accessories)')
                    ->options(function () {
                        $categories = \App\Models\Category::with('parent')->get();
                        $options = [];
                        foreach ($categories as $category) {
                            $name = strtolower($category->hierarchical_name);
                            if (str_contains($name, 'accessor')) {
                                $options[$category->id] = $category->hierarchical_name;
                            }
                        }
                        asort($options);
                        return $options;
                    })
                    ->searchable()
                    ->live()
                    ->required(),
                \Filament\Forms\Components\CheckboxList::make('sizes')
                    ->label('Sizes')
                    ->options(function ($get) {
                        return [
                            'Free Size' => 'Free Size',
                            'One Size' => 'One Size',
                            'S' => 'S',
                            'M' => 'M',
                            'L' => 'L',
                            'XL' => 'XL',
                            'XXL' => 'XXL',
                        ];
                    })
                    ->columns(5),
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
