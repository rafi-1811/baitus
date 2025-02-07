<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Rekening extends Model
{
    use HasFactory;

    protected $table = 'rekening';

    protected $fillable = [
        'gambar_rekening_bank',
        'nama_bank',
        'no_rekening',
        'nama_rekening',
    ];
}
