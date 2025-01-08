<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                ->required()
                ->label('judul'),
                Forms\Components\FileUpload::make('gambarberita')
                ->image()  // Menyatakan bahwa ini adalah gambar
                ->disk('public')  // Gambar akan disimpan di disk 'public'
                ->directory('berita'),  // Direktori tempat menyimpan gambar
                Forms\Components\TextInput::make('kategori')
                ->required()
                ->label('kategori'),
                Forms\Components\DatePicker::make('tanggalberita')
                ->required(),
                Forms\Components\Textarea::make('content')
                ->required(),

                 // Kolom untuk slug, slug akan otomatis dibuat dari judul (tidak perlu input manual)
                 Forms\Components\TextInput::make('slug')
                ->disabled() // Disable input untuk slug, karena otomatis dibuat dari judul
                ->label('Slug'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('kategori')
                ->sortable()
                ->searchable(),
                TextColumn::make('tanggalberita')
                ->date(),
                TextColumn::make('slug')
                ->limit(50),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}