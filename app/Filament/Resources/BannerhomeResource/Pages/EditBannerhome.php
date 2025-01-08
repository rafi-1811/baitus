<?php

namespace App\Filament\Resources\BannerhomeResource\Pages;

use App\Filament\Resources\BannerhomeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerhome extends EditRecord
{
    protected static string $resource = BannerhomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
