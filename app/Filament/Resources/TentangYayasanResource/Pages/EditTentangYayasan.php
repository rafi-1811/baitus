<?php

namespace App\Filament\Resources\TentangYayasanResource\Pages;

use App\Filament\Resources\TentangYayasanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTentangYayasan extends EditRecord
{
    protected static string $resource = TentangYayasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
