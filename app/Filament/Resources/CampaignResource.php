<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Campaign;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\CampaignResource\Pages;

class CampaignResource extends Resource
{
    protected static ?string $model = Campaign::class;

    protected static ?string $navigationGroup = 'Campaign';

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationLabel = 'Campaign';

    protected static ?string $pluralLabel = 'Campaign';

    protected static ?string $navigationBadgeTooltip = 'Total Campaign';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->maxLength(255),
                    
                Textarea::make('deskripsi')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->rows(5)
                    ->required(),

                Textarea::make('cerita')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->rows(5)
                    ->required(),
                    
                FileUpload::make('gambar')
                    ->required()
                    ->disk('public')
                    ->directory('gambar-cover-campaign')
                    ->visibility('private')
                    ->image()
                    ->maxSize(200)
                    ->minFiles(1)
                    ->uploadingMessage('Gambar Sedang DiUnggah...')
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->nullable(),
                    
                TextInput::make('target')
                    ->required() 
                    ->numeric()
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->prefix('Rp')
                    ->minValue(0)
                    ->label('Target Campaign'),
                    
                Select::make('status')
                    ->options([
                        'Aktif' => 'Aktif',        
                        'Nonaktif' => 'Nonaktif',
                    ])
                    ->extraAttributes(['style' => 'width: 50%;'])
                    ->required() 

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar'),
                    
                TextColumn::make('judul'),

                TextColumn::make('deskripsi')
                    ->limit(50),

                TextColumn::make('cerita')
                    ->limit(50),

                TextColumn::make('target')
                    ->formatStateUsing(fn (Campaign $record): string => 'Rp ' . number_format($record->target, 0 , '.', '.') ),

                TextColumn::make('terkumpul')
                    ->formatStateUsing(fn (Campaign $record): string => 'Rp ' . number_format($record->terkumpul, 0 , '.', '.') ),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'danger',
                    }),
                
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since()
                    ->sortable(),
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
            'index' => Pages\ListCampaigns::route('/'),
            'create' => Pages\CreateCampaign::route('/create'),
            'edit' => Pages\EditCampaign::route('/{record}/edit'),
        ];
    }
}
