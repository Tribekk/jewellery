<?php

namespace App\Filament\Resources\EncyclopediaPageResource\Pages;

use App\Filament\Resources\EncyclopediaPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEncyclopediaPages extends ListRecords
{
    protected static string $resource = EncyclopediaPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
