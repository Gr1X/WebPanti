<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      // target panti tunai
        Schema::create('target', function (Blueprint $table) {
            $table->id();
            $table->string('namaprogram');
            $table->text('deskripsi')->nullable();
            $table->decimal('jumlah_target', 10, 2)->nullable(); // target dana
            $table->string('gambar')->nullable();
            $table->date('tgl_mulai');
            $table->date('tgl_selesai')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('target');
    }
};
