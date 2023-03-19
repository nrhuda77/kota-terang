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
        Schema::create('subject_donaturs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donatur_id');
            $table->string('nama_lengkap');
            $table->string('nohp');
            $table->string('alamat');
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_donaturs');
    }
};
