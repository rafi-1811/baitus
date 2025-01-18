<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Rekening;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RekeningResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RekeningResource\RelationManagers;

class RekeningResource extends Resource
{
    protected static ?string $model = Rekening::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationLabel = 'Rekening Donasi';

    protected static ?string $navigationGroup = 'Informasi';

    protected static ?string $pluralLabel = 'Rekening Donasi';

    protected static ?string $navigationBadgeTooltip = 'Total Rekening';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_rekening_bank')
                    ->required()
                    ->image()
                    ->maxSize(150)
                    ->minFiles(1)
                    ->disk('public')
                    ->directory('gambar-bank')
                    ->uploadingMessage('Gambar Sedang Diunggah...')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Gambar Bank'),

                TextInput::make('nama_bank')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Nama Bank'),

                TextInput::make('no_rekening')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Nomor Rekening'),

                TextInput::make('nama_rekening')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Atas Nama Rekening')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar_rekening_bank')
                    ->label('Gambar'),

                TextColumn::make('nama_bank')
                    ->label('Nama Bank'),

                TextColumn::make('no_rekening')
                    ->label('Nomor Rekening'),

                TextColumn::make('nama_rekening')
                    ->label('Atas Nama Rekening')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()  // Menambahkan konfirmasi sebelum hapus
                    ->label('Hapus'),  // Mengubah label tombol
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
            'index' => Pages\ListRekenings::route('/'),
            'create' => Pages\CreateRekening::route('/create'),
            'edit' => Pages\EditRekening::route('/{record}/edit'),
        ];
    }
}
