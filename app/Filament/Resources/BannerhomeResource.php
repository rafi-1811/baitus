<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerhomeResource\Pages;
use App\Filament\Resources\BannerhomeResource\RelationManagers;
use App\Models\Bannerhome;
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

class BannerhomeResource extends Resource
{
    protected static ?string $model = Bannerhome::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('imagebanner1')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('bannerhome'),  // Direktori tempat menyimpan gambar
                Forms\Components\FileUpload::make('imagebanner2')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('bannerhome'),  // Direktori tempat menyimpan gambar
                Forms\Components\FileUpload::make('imagebanner3')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('bannerhome'),  // Direktori tempat menyimpan gambar
                Forms\Components\FileUpload::make('imagebanner4')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('bannerhome'),  // Direktori tempat menyimpan gambar
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('imagebanner1')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                ImageColumn::make('imagebanner2')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                ImageColumn::make('imagebanner3')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                ImageColumn::make('imagebanner4')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
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
            'index' => Pages\ListBannerhomes::route('/'),
            'create' => Pages\CreateBannerhome::route('/create'),
            'edit' => Pages\EditBannerhome::route('/{record}/edit'),
        ];
    }
}
