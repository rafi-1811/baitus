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
        Schema::create('rekenings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nomorbank1');
            $table->string('imagebank1')->nullable();
            $table->text('nomorbank2');
            $table->string('imagebank2')->nullable();
            $table->text('nomorbank3');
            $table->string('imagebank3')->nullable();
            $table->text('nomorbank4');
            $table->string('imagebank4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekenings');
    }
};
