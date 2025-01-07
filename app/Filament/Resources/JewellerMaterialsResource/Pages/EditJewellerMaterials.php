<?php

namespace App\Filament\Resources\JewellerMaterialsResource\Pages;

use App\Filament\Resources\JewellerMaterialsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJewellerMaterials extends EditRecord
{
    protected static string $resource = JewellerMaterialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
