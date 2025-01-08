<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Program extends Model
{
    use HasFactory;

    protected $table = 'program';
	
	protected $fillable = [
        'kategori_program',
        'deskripsi',
        'slug',
        'gambar'
    ];
	
	// Menentukan kolom yang tidak bisa diisi secara massal
    protected $guarded = [];

    // Relasi dengan model Berita
    public function berita(): HasMany
    {
        return $this->hasMany(Berita::class, 'kategori', 'kategori_program');
    }

    public function setKategoriProgramAttribute($value)
    {
        $this->attributes['kategori_program'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
