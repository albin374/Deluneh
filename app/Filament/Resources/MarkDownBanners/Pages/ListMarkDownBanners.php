<?php

namespace App\Filament\Resources\MarkDownBanners\Pages;

use App\Filament\Resources\MarkDownBanners\MarkDownBannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMarkDownBanners extends ListRecords
{
    protected static string $resource = MarkDownBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
