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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->unsignedBigInteger('ID Mahasiswa');
            $table->unsignedBigInteger('ID Mata Kuliah');
            $table->foreign('ID Mahasiswa')->references('id')->on('mahasiswas');
            $table->foreign('ID Mata Kuliah')->references('id')->on('mata_kuliahs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
