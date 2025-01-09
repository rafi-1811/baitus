<?php

namespace App\Filament\Resources\DataYatimResource\Pages;

use App\Filament\Resources\DataYatimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataYatims extends ListRecords
{
    protected static string $resource = DataYatimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
