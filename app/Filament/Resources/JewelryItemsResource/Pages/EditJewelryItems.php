<?php

namespace App\Filament\Resources\JewelryItemsResource\Pages;

use App\Filament\Resources\JewelryItemsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJewelryItems extends EditRecord
{
    protected static string $resource = JewelryItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
