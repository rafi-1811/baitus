<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SocialMedia;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SocialMediaResource\Pages;
use App\Filament\Resources\SocialMediaResource\RelationManagers;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';
    
    protected static ?string $navigationLabel = 'Sosial Media';

    protected static ?string $navigationGroup = 'Informasi';

    protected static ?string $pluralLabel = 'Sosial Media';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar_icon')
                    ->label('Icon Sosial Media')
                    ->disk('public')
                    ->image()
                    ->directory('gambar-icon-sosial-media')
                    ->uploadingMessage('Gambar Sedang Diunggah...')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->maxSize(400),

                TextInput::make('link_sosial_media')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Link Sosial Media'),
                
                TextInput::make('nama_sosial_media')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Nama Sosial Media'), 
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar_icon')
                    ->label('Icon Sosial Media'),

                TextColumn::make('link_sosial_media')
                    ->label('Link Sosial Media'),

                TextColumn::make('nama_sosial_media')
                    ->label('Nama Sosial Media'),
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
            'index' => Pages\ListSocialMedia::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            'edit' => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }
}
