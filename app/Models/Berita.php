<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Helpers\MetaKeywordsHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Berita extends Model
{
    use HasFactory, HasUuids;
	
    protected $table = 'berita';
	 // Menentukan primary key dan jenisnya (UUID)
    protected $primaryKey = 'id';
    public $incrementing = false; // Mengindikasikan bahwa primary key tidak auto increment
    protected $keyType = 'string'; // Mengindikasikan bahwa primary key adalah string (UUID)

    // Menentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'id',
        'judul',
        'slug',
        'kategori',
        'body',
        'meta_deskripsi',
        'meta_keywords',
        'cover_gambar_berita',
        'gambar_dokumentasi',
        'id_youtube',
        'status'
    ];

    // Multiply Uploads Gambar Dokumentasi Berita
    protected $casts = [
        'gambar_dokumentasi' => 'array',
    ];

    // Menentukan kolom yang tidak bisa diisi secara massal
    protected $guarded = [];

    // Relasi dengan model Program
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class, 'kategori', 'kategori_program');
    }

    //untuk mengenerate slug otomatis sesuai judul berita
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setBodyAttribute($value)
    {
        $this->attributes['body'] = $value;
        $this->attributes['meta_deskripsi'] = $value;
    }

    protected static function booted()
    {
        static::creating(function ($berita) {
            $berita->meta_keywords = MetaKeywordsHelper::generateKeywords($berita->body);
        });

        static::updating(function ($berita) {
            $berita->meta_keywords = MetaKeywordsHelper::generateKeywords($berita->body);
        });
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid(); // Generate UUID secara otomatis jika belum ada
            }
        });

        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul, '-');
        });
    }

}