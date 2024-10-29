<?php

namespace App\Filament\Resources\StoneModelResource\Pages;

use App\Filament\Resources\StoneModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStoneModels extends ListRecords
{
    protected static string $resource = StoneModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
