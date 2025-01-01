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
        Schema::create('berita_program', function (Blueprint $table) {
            $table->id(); // ID unik untuk berita
            $table->string('judul', 255); // Judul berita (wajib)
            $table->text('deskripsi'); // Deskripsi berita (opsional)
            $table->string('gambar'); // Path gambar terkait berita (opsional)
            $table->dateTime('tanggal_publikasi'); // Tanggal dan waktu berita dipublikasikan
            $table->timestamps(); // Created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_program');
    }
};
