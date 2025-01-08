<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';
    protected $fillable = ['judul',
                            'gambarberita',
                            'kategori',
                            'tanggalberita',
                            'content',
                            'slug'
                        ];
    
    public function getGambarUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->gambarberita) : null;
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul, '-');
        });
    }
}