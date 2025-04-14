<?php

namespace App\Filament\Resources\SemiPreciousStonesResource\Pages;

use App\Filament\Resources\SemiPreciousStonesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSemiPreciousStones extends ListRecords
{
    protected static string $resource = SemiPreciousStonesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
