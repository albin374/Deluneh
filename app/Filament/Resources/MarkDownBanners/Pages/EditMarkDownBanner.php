<?php

namespace App\Filament\Resources\MarkDownBanners\Pages;

use App\Filament\Resources\MarkDownBanners\MarkDownBannerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMarkDownBanner extends EditRecord
{
    protected static string $resource = MarkDownBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
