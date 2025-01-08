<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Bannerhome extends Model
{
    use HasFactory;

    protected $table = 'bannerhome';

    protected $fillable = [
        'gambar',
        'caption',
        'status'
    ];              
}
