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
      // target panti barang
        Schema::create('targetbarang', function (Blueprint $table) {
            $table->id();
            $table->string('namabarang');
            $table->text('deskripsi')->nullable();
            $table->integer('jumlah_target')->nullable(); // target dana
            $table->integer('terkumpul')->default(0); // dana terkumpul
            $table->date('tgl_mulai');
            $table->date('tgl_selesai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('targetbarang');
    }
};
