<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataYatim extends Model
{
    use HasFactory;

    protected $table = 'data_yatim';

    protected $fillable = [
        'total_yatim_binaan',
        'total_yatim_luar_binaan',
        'total_kegiatan',
        'total_daerah_cakupan'
    ];
}
