<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Pesan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Infolists\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\PesanResource\Pages;

class PesanResource extends Resource
{

    protected static ?string $model = Pesan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('telepon')->label('Telepon'),
                TextColumn::make('pesan')->label('Pesan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Lihat Pesan')
                    ->infolist([
                        Section::make('Pesan')
                            ->schema([
                                TextEntry::make('nama')->label('Nama'),
                                TextEntry::make('email')->label('Email'),
                                TextEntry::make('telepon')->label('Telepon'),
                                TextEntry::make('pesan')->label('Pesan'),
                            ])
                            ->columns(2),
                    ])
                    ->modalSubmitAction(false)
                    ->slideOver(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPesans::route('/'),
            'create' => Pages\CreatePesan::route('/create'),
            'view' => Pages\ViewPesan::route('/{record}'),
        ];
    }
}
