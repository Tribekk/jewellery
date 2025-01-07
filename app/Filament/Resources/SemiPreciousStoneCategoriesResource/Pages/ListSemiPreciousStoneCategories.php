<?php

namespace App\Filament\Resources\SemiPreciousStoneCategoriesResource\Pages;

use App\Filament\Resources\SemiPreciousStoneCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSemiPreciousStoneCategories extends ListRecords
{
    protected static string $resource = SemiPreciousStoneCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
