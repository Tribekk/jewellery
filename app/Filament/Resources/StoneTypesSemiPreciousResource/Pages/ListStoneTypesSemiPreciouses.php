<?php

namespace App\Filament\Resources\StoneTypesSemiPreciousResource\Pages;

use App\Filament\Resources\StoneTypesSemiPreciousResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStoneTypesSemiPreciouses extends ListRecords
{
    protected static string $resource = StoneTypesSemiPreciousResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
