<?php

namespace App\Filament\Resources\TypeStoneResource\Pages;

use App\Filament\Resources\TypeStoneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypeStone extends EditRecord
{
    protected static string $resource = TypeStoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
