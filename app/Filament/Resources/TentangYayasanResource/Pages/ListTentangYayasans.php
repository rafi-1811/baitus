<?php

namespace App\Filament\Resources\TentangYayasanResource\Pages;

use App\Filament\Resources\TentangYayasanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangYayasans extends ListRecords
{
    protected static string $resource = TentangYayasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
