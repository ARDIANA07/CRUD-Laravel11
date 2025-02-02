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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('judul');
            $table->integer('kategori_id');
            $table->integer('penerbit_id');
            $table->string('isbn')->nullable();
            $table->string('pengarang');
            $table->integer('jumlah_hal');
            $table->integer('stok');
            $table->integer('tahun_terbit');
            $table->text('sinopsis');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};