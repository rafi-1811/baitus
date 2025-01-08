<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan
    protected $table = 'visi_misis';

    // Menentukan kolom mana yang dapat diisi (fillable)
    protected $fillable = ['visi', 
                            'misi'];
}
