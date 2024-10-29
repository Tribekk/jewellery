<?php

namespace App\Filament\Resources\TypeStoneResource\Pages;

use App\Filament\Resources\TypeStoneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypeStones extends ListRecords
{
    protected static string $resource = TypeStoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
