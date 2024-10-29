<?php

namespace App\Filament\Resources\ColorStoneResource\Pages;

use App\Filament\Resources\ColorStoneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditColorStone extends EditRecord
{
    protected static string $resource = ColorStoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
