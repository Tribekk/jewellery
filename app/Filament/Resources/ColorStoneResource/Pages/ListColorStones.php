<?php

namespace App\Filament\Resources\ColorStoneResource\Pages;

use App\Filament\Resources\ColorStoneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColorStones extends ListRecords
{
    protected static string $resource = ColorStoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
