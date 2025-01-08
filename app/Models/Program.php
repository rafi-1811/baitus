<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Program extends Model
{
    use HasFactory;

    protected $table = 'programs';
    protected $fillable = ['judul1', 
                            'gambarberita1', 
                            'keterangan1',
                            'judul2', 
                            'gambarberita2', 
                            'keterangan2',
                            'judul3', 
                            'gambarberita3', 
                            'keterangan3',
                            'judul4', 
                            'gambarberita4', 
                            'keterangan4',
                            'judul5', 
                            'gambarberita5', 
                            'keterangan5',
                            'judul6', 
                            'gambarberita6', 
                            'keterangan6',
                            'judul7', 
                            'gambarberita7', 
                            'keterangan7',
                            'judul8', 
                            'gambarberita8', 
                            'keterangan8',
                        ];
                        
    public function getGambarUrlAttribute()
    {
        return asset('storage/' . $this->gambarberita1,
                                   $this->gambarberita2,
                                   $this->gambarberita3,
                                   $this->gambarberita4,
                                   $this->gambarberita5,
                                   $this->gambarberita6,
                                   $this->gambarberita7,
                                   $this->gambarberita8,
                                );
    }
}
