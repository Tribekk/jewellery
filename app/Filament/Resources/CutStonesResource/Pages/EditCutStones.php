<?php

namespace App\Filament\Resources\CutStonesResource\Pages;

use App\Filament\Resources\CutStonesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCutStones extends EditRecord
{
    protected static string $resource = CutStonesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
