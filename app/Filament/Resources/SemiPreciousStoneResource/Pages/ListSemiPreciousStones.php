<?php

namespace App\Filament\Resources\SemiPreciousStoneResource\Pages;

use App\Filament\Resources\SemiPreciousStoneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSemiPreciousStones extends ListRecords
{
    protected static string $resource = SemiPreciousStoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
