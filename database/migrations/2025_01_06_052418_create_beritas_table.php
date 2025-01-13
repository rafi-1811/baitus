<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('kategori');
            $table->text('body');
            $table->text('meta_deskripsi');
            $table->text('meta_keywords');
            $table->string('cover_gambar_berita');
<<<<<<< HEAD
            $table->string('gambar_content')->nullable();
=======
            $table->string('gambar_content');
>>>>>>> 9ca11ea2f48d9730d282e93a4640ed4978516bfb
            $table->text('quotes')->nullable();
            $table->string('status');

            $table->timestamps();

            // foreign untuk relasi tabel
            $table->foreign('kategori')->references('kategori_program')->on('program')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
