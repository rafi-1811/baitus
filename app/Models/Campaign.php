<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;

    protected $table = 'campaign';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'cerita',
        'target',
        'terkumpul',
        'status',
        'slug',
    ];

    protected $casts = [
        'target' => 'decimal:2',
        'terkumpul' => 'decimal:2',
    ];

    public function donaturs()
    {
        return $this->hasMany(Donatur::class);
    }

    public function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = $model->generateSlug($model->judul);
        });

        static::updating(function ($model) {
            $model->slug = $model->generateSlug($model->judul);
        });
    }
}
