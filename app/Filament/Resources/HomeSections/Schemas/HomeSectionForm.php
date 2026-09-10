<?php

namespace App\Filament\Resources\HomeSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class HomeSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('is_banner')
                    ->label('Is this a Banner / Between Section?')
                    ->live(),
                \Filament\Forms\Components\Repeater::make('banner_sentences')
                    ->label('Banner Sentences (For Carousel)')
                    ->schema([
                        TextInput::make('sentence')
                            ->label('Sentence')
                            ->required(),
                    ])
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => !$get('is_banner')),
                Toggle::make('is_timer')
                    ->label('Is this a Countdown Timer Section?')
                    ->live(),
                \Filament\Forms\Components\DateTimePicker::make('timer_end_date')
                    ->label('Timer End Date & Time')
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => !$get('is_timer')),
                TextInput::make('name')
                    ->placeholder('Leave blank to auto-generate')
                    ->maxLength(255),
                TextInput::make('identifier')
                    ->placeholder('Leave blank to auto-generate')
                    ->maxLength(255)
                    ->unique('home_sections', 'identifier', ignoreRecord: true),
                Toggle::make('show_title')
                    ->label('Show Section Name (Title) on Homepage?')
                    ->default(true),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('layout_style')
                    ->options([
                        'grid_2' => 'Grid (2 images per row)',
                        'grid_4' => 'Grid (4 images per row)',
                        'grid_5' => 'Grid (5 images per row)',
                        'grid_10' => 'Grid (10 images: 3-4-3 layout)',
                        'grid_6' => 'Grid (6 images per row, With Gap)',
                        'grid_6_no_gap' => 'Grid (6 images per row, No Gap)',
                        'single_image' => 'Single Full-Width Image',
                        'slider_6' => 'Horizontal Slider (6 images)',
                        'slider_3_zoomed' => 'Centered Zoom Slider (3 images)',
                        'product_filter' => 'Product Filter (With Category Tabs)',
                    ])
                    ->default('grid_4')
                    ->required()
                    ->live()
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer')),
                Select::make('section_type')
                    ->label('Section Type')
                    ->options([
                        'product' => 'Products Section',
                        'image' => 'Images Section',
                        'advanced_image' => 'Advanced Images (With Text & Color)',
                        'video' => 'Videos Section',
                    ])
                    ->live()
                    ->dehydrated(false)
                    ->afterStateHydrated(function (\Filament\Forms\Components\Select $component, $state, $record) {
                        if ($record) {
                            if (!empty($record->videos)) {
                                $component->state('video');
                            } elseif (!empty($record->advanced_images)) {
                                $component->state('advanced_image');
                            } elseif (!empty($record->images)) {
                                $component->state('image');
                            } elseif (!empty($record->product_ids) || !empty($record->category_ids)) {
                                $component->state('product');
                            }
                        }
                    })
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer')),
                Select::make('product_ids')
                    ->label('Products')
                    ->multiple()
                    ->searchable()
                    ->options(\App\Models\Product::pluck('name', 'id')->toArray())
                    ->columnSpanFull()
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || $get('section_type') !== 'product' || $get('layout_style') === 'product_filter'),
                Select::make('category_ids')
                    ->label('Categories')
                    ->multiple()
                    ->searchable()
                    ->options(\App\Models\Category::pluck('name', 'id')->toArray())
                    ->columnSpanFull()
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || $get('section_type') !== 'product' || $get('layout_style') !== 'product_filter'),
                FileUpload::make('images')
                    ->label('Section Images (For Image Grid)')
                    ->multiple()
                    ->image()
                    ->maxFiles(15)
                    ->disk('public')
                    ->columnSpanFull()
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || $get('section_type') !== 'image'),
                \Filament\Forms\Components\Repeater::make('advanced_images')
                    ->label('Advanced Images (With Text & Color)')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Upload Image')
                            ->image()
                            ->disk('public')
                            ->required(),
                        TextInput::make('subtitle')
                            ->label('Subtitle Text (e.g., NEW COLLECTION)'),
                        \Filament\Forms\Components\ColorPicker::make('subtitle_color')
                            ->label('Subtitle Color')
                            ->default('#ffff00'),
                        TextInput::make('title')
                            ->label('Title Text (e.g., FORMAL SHIRT)'),
                        \Filament\Forms\Components\ColorPicker::make('title_color')
                            ->label('Title Color')
                            ->default('#ffffff'),
                    ])
                    ->maxItems(15)
                    ->columnSpanFull()
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || $get('section_type') !== 'advanced_image'),
                Toggle::make('enable_carousel')
                    ->label('Enable Manual Dot Scroll (4 dots)')
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || !in_array($get('section_type'), ['image', 'product']))
                    ->live(),
                Toggle::make('enable_auto_carousel')
                    ->label('Enable Automatic Carousel')
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || !in_array($get('section_type'), ['image', 'product']))
                    ->live(),
                Toggle::make('zoom_out_image')
                    ->label('Enable Image Zoom Out (Show Full Image without cropping)')
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || !in_array($get('section_type'), ['image', 'product']))
                    ->live(),
                Toggle::make('has_explore_all')
                    ->label('Add "Explore All" button?')
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer'))
                    ->live(),
                TextInput::make('explore_all_link')
                    ->label('Explore All Link (URL)')
                    ->url()
                    ->hidden(fn ($get) => !$get('has_explore_all')),
                \Filament\Forms\Components\Repeater::make('videos')
                    ->label('Section Videos (For Video Grid)')
                    ->schema([
                        FileUpload::make('upload')
                            ->label('Upload Video File')
                            ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg'])
                            ->disk('public'),
                        TextInput::make('link')
                            ->label('External Video Link (URL)')
                            ->url()
                            ->placeholder('https://...'),
                    ])
                    ->maxItems(15)
                    ->columnSpanFull()
                    ->hidden(fn (\Filament\Schemas\Components\Utilities\Get $get) => $get('is_banner') || $get('is_timer') || $get('section_type') !== 'video'),
            ]);
    }
}
