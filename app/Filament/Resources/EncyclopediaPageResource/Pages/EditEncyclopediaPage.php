<?php

namespace App\Filament\Resources\EncyclopediaPageResource\Pages;

use App\Filament\Resources\EncyclopediaPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEncyclopediaPage extends EditRecord
{
    protected static string $resource = EncyclopediaPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
