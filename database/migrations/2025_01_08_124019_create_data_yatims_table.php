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
        Schema::create('data_yatim', function (Blueprint $table) {
            $table->id();
            $table->string('total_yatim_binaan');
            $table->string('total_yatim_luar_binaan');
            $table->string('total_kegiatan');
            $table->string('total_daerah_cakupan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_yatims');
    }
};
