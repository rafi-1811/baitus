<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\DataYatim;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DataYatimResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DataYatimResource\RelationManagers;

class DataYatimResource extends Resource
{
    protected static ?string $model = DataYatim::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationLabel = 'Data Yatim';

    protected static ?string $pluralLabel = 'Data Yatim';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('total_yatim_binaan')
                    ->required()
                    ->numeric()
                    ->label('Total Yatim Binaan'),

                TextInput::make('total_yatim_luar_binaan')
                    ->required()
                    ->numeric()
                    ->label('Total Yatim Luar Binaan'),

                TextInput::make('total_kegiatan')
                    ->required()
                    ->numeric()
                    ->label('Total Kegiatan'),

                TextInput::make('total_daerah_cakupan')
                    ->required()
                    ->numeric()
                    ->label('Total Daerah Cakupan')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('total_yatim_binaan')
                    ->label('Total Yatim Binaan'),

                TextColumn::make('total_yatim_luar_binaan')
                    ->label('Total Yatim Luar Binaan'),

                TextColumn::make('total_kegiatan')
                    ->label('Total Kegiatan'),

                TextColumn::make('total_daerah_cakupan')
                    ->label('Total Daerah Cakupan')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListDataYatims::route('/'),
            'create' => Pages\CreateDataYatim::route('/create'),
            'edit' => Pages\EditDataYatim::route('/{record}/edit'),
        ];
    }
}
