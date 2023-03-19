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
        Schema::create('bantuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_bantuan_id');
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->string('judul_bantuan');
            $table->text('text_wa');
            $table->string('gambar_undangan_wa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuans');
    }
};
