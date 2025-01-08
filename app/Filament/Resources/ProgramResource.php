<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramResource\Pages;
use App\Filament\Resources\ProgramResource\RelationManagers;
use App\Models\Program;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;


class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Program 1')
            ->schema([
                // Judul 1
                TextInput::make('judul1')
                    ->label('Judul Program 1')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita1')
                    ->label('Gambar Program 1')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan1')
                    ->label('Keterangan Program 1')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

            Forms\Components\Section::make('Program 2')
            ->schema([
                // Judul 1
                TextInput::make('judul2')
                    ->label('Judul Program 2')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita2')
                    ->label('Gambar Program 2')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan2')
                    ->label('Keterangan Program 2')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

            Forms\Components\Section::make('Program 3')
            ->schema([
                // Judul 1
                TextInput::make('judul3')
                    ->label('Judul Program 3')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita3')
                    ->label('Gambar Program 3')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan3')
                    ->label('Keterangan Program 3')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

            Forms\Components\Section::make('Program 4')
            ->schema([
                // Judul 1
                TextInput::make('judul4')
                    ->label('Judul Program 4')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita4')
                    ->label('Gambar Program 4')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan4')
                    ->label('Keterangan Program 4')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

            Forms\Components\Section::make('Program 5')
            ->schema([
                // Judul 1
                TextInput::make('judul5')
                    ->label('Judul Program 5')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita5')
                    ->label('Gambar Program 5')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan5')
                    ->label('Keterangan Program 5')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

            Forms\Components\Section::make('Program 6')
            ->schema([
                // Judul 1
                TextInput::make('judul6')
                    ->label('Judul Program 6')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita6')
                    ->label('Gambar Program 6')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan6')
                    ->label('Keterangan Program 6')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

            Forms\Components\Section::make('Program 7')
            ->schema([
                // Judul 1
                TextInput::make('judul7')
                    ->label('Judul Program 7')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita7')
                    ->label('Gambar Program 7')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan7')
                    ->label('Keterangan Program 7')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

            Forms\Components\Section::make('Program 8')
            ->schema([
                // Judul 1
                TextInput::make('judul8')
                    ->label('Judul Program 8')
                    ->required()
                    ->maxLength(255),

                // Gambar 1
                FileUpload::make('gambarberita8')
                    ->label('Gambar Program 8')
                    ->image()
                    ->required()
                    ->disk('public'),

                // Keterangan 1
                Textarea::make('keterangan8')
                    ->label('Keterangan Program 8')
                    ->required()
                    ->maxLength(1000),
            ])
            ->columns(1), // Menampilkan dalam satu kolom (vertikal)

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul1')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita1')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan1')->searchable(),
                TextColumn::make('judul2')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita2')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan2')->searchable(),
                TextColumn::make('judul3')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita3')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan3')->searchable(),
                TextColumn::make('judul4')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita4')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan4')->searchable(),
                TextColumn::make('judul5')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita5')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan5')->searchable(),
                TextColumn::make('judul6')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita6')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan6')->searchable(),
                TextColumn::make('judul7')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita7')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan7')->searchable(),
                TextColumn::make('judul8')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambarberita8')  // Menampilkan gambar di kolom
                ->disk('public')
                ->width(100)
                ->height(100),
                TextColumn::make('keterangan8')->searchable(),
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
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }
}
