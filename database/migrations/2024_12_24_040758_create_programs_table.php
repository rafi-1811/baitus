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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('judul1');
            $table->string('gambarberita1')->nullable();
            $table->longText('keterangan1');
            $table->text('judul2');
            $table->string('gambarberita2')->nullable();
            $table->longText('keterangan2');
            $table->text('judul3');
            $table->string('gambarberita3')->nullable();
            $table->longText('keterangan3');
            $table->text('judul4');
            $table->string('gambarberita4')->nullable();
            $table->longText('keterangan4');
            $table->text('judul5');
            $table->string('gambarberita5')->nullable();
            $table->longText('keterangan5');
            $table->text('judul6');
            $table->string('gambarberita6')->nullable();
            $table->longText('keterangan6');
            $table->text('judul7');
            $table->string('gambarberita7')->nullable();
            $table->longText('keterangan7');
            $table->text('judul8');
            $table->string('gambarberita8')->nullable();
            $table->longText('keterangan8');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
