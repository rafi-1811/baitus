<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use App\Models\Program;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $pluralLabel = 'Berita';

    protected static ?string $navigationBadgeTooltip = 'Total Berita';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Berita')
                    ->required(),

                Select::make('kategori')
                    ->label('Kategori Berita')
                    ->options(function () {
                        return Program::pluck('kategori_program', 'kategori_program')->toArray();
                    })
                    ->required(),

                Textarea::make('body')
                    ->label('Isi Berita')
                    ->required()
                    ->rows(10)
                    ->cols(20)
                    ->columnSpan(2),

                FileUpload::make('cover_gambar_berita')
                    ->label('Cover Gambar Berita')
                    ->disk('public')
                    ->directory('gambar-cover-berita')
                    ->visibility('private')
                    ->image()
                    ->maxSize(250)
                    ->minFiles(1)
                    ->uploadingMessage('Gambar Sedang Diunggah...')
                    ->required(),

                FileUpload::make('gambar_content')
                    ->label('Gambar Content (opsional)')
                    ->disk('public')
                    ->directory('gambar-content-berita')
                    ->visibility('private')
                    ->image()
                    ->maxSize(200)
                    ->uploadingMessage('Gambar Sedang Diunggah...')
                    ->panelLayout('grid'),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'reviewing' => 'Reviewing',
                        'published' => 'Published',
                    ])
                    ->required(),

                TextInput::make('quotes')
                    ->label('Quotes (opsional)')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Berita::orderBy('created_at', 'desc'))
            ->columns([
                ImageColumn::make('cover_gambar_berita')
                    ->label('Gambar'),

                ImageColumn::make('gambar_content')
                    ->label('Gambar Content'),

                TextColumn::make('judul')
                    ->label('Judul Berita')
                    ->limit(20),

                TextColumn::make('quotes')
                    ->label('Quotes')
                    ->limit(20),

                TextColumn::make('kategori')
                    ->label('Kategori'),

                TextColumn::make('body')
                    ->label('Isi Berita')
                    ->limit(50),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since(),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'draft' => 'gray',
                        'reviewing' => 'warning',
                        'published' => 'success',
                    })
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
