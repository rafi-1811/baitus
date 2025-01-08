<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RekeningResource\Pages;
use App\Filament\Resources\RekeningResource\RelationManagers;
use App\Models\Rekening;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;

class RekeningResource extends Resource
{
    protected static ?string $model = Rekening::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomorbank1')
                ->required()
                ->label('Nomorbank1'),
                Forms\Components\FileUpload::make('imagebank1')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('rekening'),  // Direktori tempat menyimpan gambar
                Forms\Components\TextInput::make('nomorbank2')
                ->required()
                ->label('Nomorbank2'),
                Forms\Components\FileUpload::make('imagebank2')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('rekening'),  // Direktori tempat menyimpan gambar
                Forms\Components\TextInput::make('nomorbank3')
                ->required()
                ->label('Nomorbank3'),
                Forms\Components\FileUpload::make('imagebank3')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('rekening'),  // Direktori tempat menyimpan gambar
                Forms\Components\TextInput::make('nomorbank4')
                ->required()
                ->label('Nomorbank4'),
                Forms\Components\FileUpload::make('imagebank4')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('rekening'),  // Direktori tempat menyimpan gambar
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomorbank1')
                ->sortable()
                ->searchable(),
                ImageColumn::make('imagebank1')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('nomorbank2')
                ->sortable()
                ->searchable(),
                ImageColumn::make('imagebank2')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(130)
                ->height(100),
                TextColumn::make('nomorbank3')
                ->sortable()
                ->searchable(),
                ImageColumn::make('imagebank3')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('nomorbank4')
                ->sortable()
                ->searchable(),
                ImageColumn::make('imagebank4')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
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
