<?php

namespace App\Filament\Resources\SemiPreciousStonesResource\Pages;

use App\Filament\Resources\SemiPreciousStonesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSemiPreciousStones extends EditRecord
{
    protected static string $resource = SemiPreciousStonesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
