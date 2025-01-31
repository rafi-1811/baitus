<?php

namespace App\Filament\Widgets;

use App\Models\Donatur;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsTransaksi extends BaseWidget
{
    protected function getStats(): array
    {
         $successCount = Donatur::where('status', 'SUCCESS')->count();
        
         $pendingCount = Donatur::where('status', 'PENDING')->count();
 
         $failedCount = Donatur::where('status', 'FAILED')->count();
 
         return [
             Stat::make('SUCCESS', $successCount)
                 ->description('Transaksi Sukses')
                 ->descriptionIcon('heroicon-m-arrows-up-down', IconPosition::Before)
                 ->color('success'),
 
             Stat::make('PENDING', $pendingCount)
                 ->description('Transaksi Pending')
                 ->descriptionIcon('heroicon-m-arrow-path', IconPosition::Before)
                 ->color('info'),
 
             Stat::make('FAILED', $failedCount)
                 ->description('Transaksi Gagal')
                 ->descriptionIcon('heroicon-m-x-mark', IconPosition::Before)
                 ->color('danger'),
         ];
    }
}
