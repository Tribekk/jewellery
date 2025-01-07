<?php

namespace App\Filament\Resources\SemiPreciousStoneResource\Pages;

use App\Filament\Resources\SemiPreciousStoneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSemiPreciousStone extends EditRecord
{
    protected static string $resource = SemiPreciousStoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
