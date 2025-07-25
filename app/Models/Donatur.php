<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';

    protected $fillable = [
        'campaign_id',
        'transaksi_id',
        'nama',
        'nomor_telepon',
        'email',
        'jumlah',
        'doa',
        'status',
        'order_id'
    ];

    // Menentukan tipe data kolom tertentu
    protected $casts = [
        'jumlah' => 'decimal:2',
    ];

    // Relasi dengan model Campaign
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function updateStatusAndCampaignTotal($status)
    {
        $this->status = strtoupper($status);
        $this->save();

        $totalTerkumpul = self::where('campaign_id', $this->campaign_id)
            ->where('status', 'SUCCESS')
            ->sum('jumlah');

        $this->campaign->update(['terkumpul' => $totalTerkumpul]);
    }
}
