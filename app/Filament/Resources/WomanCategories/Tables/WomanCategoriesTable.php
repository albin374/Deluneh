<?php

namespace App\Filament\Resources\WomanCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WomanCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('WomanCategory Name')
                    ->formatStateUsing(function ($state, $record) {
                        $indent = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $record->depth);
                        $prefix = $record->depth > 0 ? '└─ ' : '';
                        return new \Illuminate\Support\HtmlString("{$indent}{$prefix}{$state}");
                    })
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('parent.name')
                    ->label('Parent WomanCategory')
                    ->formatStateUsing(fn ($record) => $record->parent ? $record->parent->hierarchical_name : 'None')
                    ->sortable(),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
            ])
            ->modifyQueryUsing(function ($query) {
                $query->orderByRaw('(SELECT sort_order FROM categories AS parent WHERE parent.id = COALESCE(categories.parent_id, categories.id))')
                      ->orderByRaw('parent_id IS NOT NULL')
                      ->orderBy('sort_order');
            })
            ->reorderable('sort_order')
            ->filters([
                //
            ])
            ->recordActions([
                \Filament\Actions\Action::make('view_children')
                    ->label('Children')
                    ->icon('heroicon-o-folder-open')
                    ->modalHeading(fn (\App\Models\WomanCategory $record) => "Children of {$record->name}")
                    ->modalContent(fn (\App\Models\WomanCategory $record) => view('filament.categories.children-modal', ['record' => $record]))
                    ->modalSubmitAction(false)
                    ->modalCancelActionLabel('Close')
                    ->visible(fn (\App\Models\WomanCategory $record) => $record->children()->exists()),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
