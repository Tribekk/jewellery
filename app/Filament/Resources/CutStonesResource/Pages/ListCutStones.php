<?php

namespace App\Filament\Resources\CutStonesResource\Pages;

use App\Filament\Resources\CutStonesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCutStones extends ListRecords
{
    protected static string $resource = CutStonesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
