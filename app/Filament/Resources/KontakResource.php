<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kontak;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KontakResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KontakResource\RelationManagers;

class KontakResource extends Resource
{
    protected static ?string $model = Kontak::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationLabel = 'Kontak';

    protected static ?string $navigationGroup = 'Informasi';

    protected static ?string $pluralLabel = 'Kontak';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('alamat')
                    ->required()
                    ->rows(5)
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Alamat Yayasan'), 

                TextInput::make('email')
                    ->required()
                    ->email()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Email Yayasan'),

                TextInput::make('telepon')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Nomor Telepon Yayasan'),

                TextInput::make('whatsapp')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Nomor Whatsapp Yayasan')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('alamat')
                    ->label('Alamat Yayasan'),

                TextColumn::make('email')
                    ->label('Email Yayasan'),

                TextColumn::make('telepon')
                    ->label('Telepon Yayasan'),

                TextColumn::make('whatsapp')
                    ->label('Whatsapp Yayasan')
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
            'index' => Pages\ListKontaks::route('/'),
            'create' => Pages\CreateKontak::route('/create'),
            'edit' => Pages\EditKontak::route('/{record}/edit'),
        ];
    }
}
