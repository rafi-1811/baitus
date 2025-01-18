<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TentangYayasan;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TentangYayasanResource\Pages;
use App\Filament\Resources\TentangYayasanResource\RelationManagers;
use Filament\Forms\Components\RichEditor;

class TentangYayasanResource extends Resource
{
    protected static ?string $model = TentangYayasan::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationGroup = 'Informasi';

    protected static ?string $navigationLabel = 'Tentang Yayasan';

    protected static ?string $pluralLabel = 'Tentang Yayasan';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_tentang_yayasan')
                    ->required()
                    ->label('Gambar')
                    ->disk('public')
                    ->directory('gambar-tentang-yayasan')
                    ->visibility('private')
                    ->image()
                    ->maxSize(500)
                    ->minFiles(1)
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->uploadingMessage('Gambar Sedang Diunggah...'),

                Textarea::make('tentang_yayasan')
                    ->rows(5)
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Deskripsi Tentang Yayasan'),

                Textarea::make('visi')
                    ->rows(5)
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Visi Yayasan'),

                RichEditor::make('misi')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Misi Yayasan')
                    ->toolbarButtons(['bold', 'italic', 'underline', 'link', 'unorderedList', 'bulletList', 'orderedList']),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar_tentang_yayasan')
                    ->label('Gambar'),

                TextColumn::make('tentang_yayasan')
                    ->limit(30)
                    ->label('Tentang Yayasan'),

                TextColumn::make('visi')
                    ->limit(20)
                    ->label('Visi'),

                TextColumn::make('misi')
                    ->limit(20)
                    ->label('Visi')
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
            'index' => Pages\ListTentangYayasans::route('/'),
            'create' => Pages\CreateTentangYayasan::route('/create'),
            'edit' => Pages\EditTentangYayasan::route('/{record}/edit'),
        ];
    }
}
