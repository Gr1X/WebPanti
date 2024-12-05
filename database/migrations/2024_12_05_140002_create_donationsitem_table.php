<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      // donasi dalam bentuk barang
        Schema::create('donasibarang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // id user yang berdonasi
            $table->string('nama_barang');
            $table->integer('jumlah'); // jumlah donasi tunai
            $table->text('notes')->nullable(); // catatan
            $table->timestamp('waktu_donasi'); // waktu donasi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donasibarang');
    }
};