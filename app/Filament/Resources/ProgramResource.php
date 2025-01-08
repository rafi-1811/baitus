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

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Program';

    protected static ?string $pluralLabel = 'Program Yayasan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kategori_program')
                    ->label('Judul Kategori Program')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->required(),

                TextInput::make('deskripsi')
                    ->label('Deskripsi Program')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->required(),
        
                FileUpload::make('gambar')
                    ->label('Cover Gambar Program')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->disk('public')
                    ->directory('gambar-program')
                    ->visibility('private')
                    ->image()
                    ->maxSize(200)
                    ->minFiles(1)
                    ->uploadingMessage('Gambar Sedang DiUnggah...')
                    ->required(),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar Program'),

                TextColumn::make('kategori_program')
                    ->label('Kategori Program'),

                TextColumn::make('deskripsi')
                    ->limit(50)
                    ->label('Deskripsi Program'),
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
