<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\DataYatim;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
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
                FileUpload::make('gambar')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->disk('public')
                    ->directory('gambar-data-yatim')
                    ->image()
                    ->maxSize(300)
                    ->uploadingMessage('Gambar Sedang Diunggah...')
                    ->visibility('private')
                    ->label('Gambar'),

                TextInput::make('jumlah_data')
                    ->required()
                    ->numeric()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Jumlah Data'),

                Select::make('kategori_data')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Kategori Data')
                    ->options([
                        'Total Yatim Binaan' => 'Total Yatim Binaan',
                        'Total Yatim Luar Binaan' => 'Total Yatim Luar Binaan',
                        'Total Kegiatan' => 'Total Kegiatan',
                        'Total Daerah Cakupan' => 'Total Daerah Cakupan',
                    ])

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar'),

                TextColumn::make('jumlah_data')
                    ->label('Total Data'),

                TextColumn::make('kategori_data')
                    ->label('Kategori'),
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
