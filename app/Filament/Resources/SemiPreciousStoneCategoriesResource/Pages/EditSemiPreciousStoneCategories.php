<?php

namespace App\Filament\Resources\SemiPreciousStoneCategoriesResource\Pages;

use App\Filament\Resources\SemiPreciousStoneCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSemiPreciousStoneCategories extends EditRecord
{
    protected static string $resource = SemiPreciousStoneCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
