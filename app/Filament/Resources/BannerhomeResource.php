<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Bannerhome;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BannerhomeResource\Pages;
use App\Filament\Resources\BannerhomeResource\RelationManagers;

class BannerhomeResource extends Resource
{
    protected static ?string $model = Bannerhome::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Banner Image';

    protected static ?string $navigationGroup = 'Banner';

    protected static ?string $pluralLabel = 'Banner Image';

    protected static ?string $navigationBadgeTooltip = 'Total Gambar';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar')
                    ->disk('public')
                    ->directory('gambar-slider')
                    ->visibility('private')
                    ->image()
                    ->minFiles(1)
                    ->uploadingMessage('Gambar Sedang Diunggah...')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->required()
                    ->label('Slider Gambar'),

                TextInput::make('caption')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->label('Caption'),

                Select::make('status')
                    ->options([
                        'aktif' => 'Aktif',
                        'nonaktif' => 'Nonaktif',
                    ])
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->required(),

            ])->Columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar'),

                TextColumn::make('caption')
                    ->label('Caption')

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
