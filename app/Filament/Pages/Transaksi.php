<?php

namespace App\Filament\Pages;
use App\Models\Donatur;
use Filament\Pages\Page;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use App\Filament\Widgets\StatsTransaksi;
use Filament\Tables\Concerns\InteractsWithTable;

class Transaksi extends Page implements HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Campaign';

    protected static ?string $model = Donatur::class;

    protected static string $view = 'filament.pages.transaksi';

    protected static ?string $navigationLabel = 'Transaksi';

    protected ?string $heading = 'Transaksi Donasi';

    protected static ?string $navigationBadgeTooltip = 'Total Transaksi Donasi';

    protected function getHeaderWidgets(): array
    {
        return [
            StatsTransaksi::class,
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        
        return Donatur::count(); 
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Donatur::query())
            ->columns([
                TextColumn::make('order_id')
                    ->label('Order ID')
                    ->limit(15) 
                    ->tooltip(fn ($record) => $record->order_id) 
                    ->copyMessage('Order ID disalin')
                    ->copyMessageDuration(1500)
                    ->copyable(),
                    

                TextColumn::make('nama'),
                    
                
                TextColumn::make('email')
                    ->sortable(),

                TextColumn::make('jumlah')
                    ->formatStateUsing(fn (Donatur $record): string => 'Rp ' . number_format($record->jumlah, 0 , '.', '.') ),
                
                TextColumn::make('status')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'SUCCESS' => 'success', // Warna hijau untuk SUCCESS
                        'Menunggu Pembayaran' => 'info',
                        'PENDING' => 'info',    // Warna biru untuk PENDING
                        'FAILED' => 'danger',    // Warna merah untuk FAILED
                        default => 'gray',       // Warna default jika tidak cocok
                    }),


                TextColumn::make('created_at')
                    ->label('Tanggal Donasi')
                    ->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->translatedFormat('d F Y'))
                    ->tooltip(fn ($state) => \Carbon\Carbon::parse($state)->format('d-m-Y H:i:s'))
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
            ])
            ->bulkActions([
            ]);
    }
}
