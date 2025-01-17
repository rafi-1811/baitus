<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataYatim extends Model
{
    use HasFactory;

    protected $table = 'data_yatim';

    protected $fillable = [
        'gambar',
        'jumlah_data',
        'kategori_data',
    ];
}
