<?php

namespace App\Filament\Resources\StoneTypesSemiPreciousResource\Pages;

use App\Filament\Resources\StoneTypesSemiPreciousResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStoneTypesSemiPrecious extends EditRecord
{
    protected static string $resource = StoneTypesSemiPreciousResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
