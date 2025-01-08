<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Bannerhome extends Model
{
    use HasFactory;

    protected $table = 'bannerhomes';
    protected $fillable = ['imagebanner1', 
                            'imagebanner2', 
                            'imagebanner3',
                            'imagebanner4'
                        ];
                        
    public function getGambarUrlAttribute()
    {
        return asset('storage/' . $this->imagebanner1,
                                   $this->imagebanner2,
                                   $this->imagebanner3,
                                   $this->imagebanner4);
    }
}
