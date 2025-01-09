<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TentangYayasan extends Model
{
    use HasFactory;

    protected $table = 'tentang_yayasan';

    protected $fillable = [
        'gambar_tentang_yayasan',
        'tentang_yayasan',
        'visi',
        'misi'
    ];
}
