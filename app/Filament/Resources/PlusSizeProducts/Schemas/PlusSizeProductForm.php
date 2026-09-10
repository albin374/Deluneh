<?php

namespace App\Filament\Resources\PlusSizeProducts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PlusSizeProductForm
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
                    ->options(\App\Models\PlusSizeCategory::getTreeOptions())
                    ->searchable()
                    ->live()
                    ->required(),
                \Filament\Forms\Components\CheckboxList::make('sizes')
                    ->label('Sizes')
                    ->options(function ($get) {
                        $categoryId = $get('category_id');
                        if ($categoryId) {
                            $category = \App\Models\Category::find($categoryId);
                            if ($category) {
                                $name = strtolower($category->name);
                                $parentName = $category->parent ? strtolower($category->parent->name) : '';
                                if (strpos($name, 'footwear') !== false || strpos($parentName, 'footwear') !== false) {
                                    return [
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                        '11' => '11',
                                        '12' => '12',
                                    ];
                                }
                            }
                        }
                        return [
                            'XL' => 'XL',
                            'XXL' => 'XXL',
                            '3XL' => '3XL',
                            '4XL' => '4XL',
                            '5XL' => '5XL',
                            '6XL' => '6XL',
                        ];
                    })
                    ->columns(3),
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