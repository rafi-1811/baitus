<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Rekening extends Model
{
    use HasFactory;

    protected $table = 'rekenings';
    protected $fillable = ['nomorbank1', 
                            'imagebank1', 
                            'nomorbank2',
                            'imagebank2',
                            'nomorbank3',
                            'imagebank3',
                            'nomorbank4',
                            'imagebank4'
                        ];
                        
    public function getGambarUrlAttribute()
    {
        return asset('storage/' . $this->imagebank1,
                                   $this->imagebank2,
                                   $this->imagebank3,
                                   $this->imagebank4);
    }
}
