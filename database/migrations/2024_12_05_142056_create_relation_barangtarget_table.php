<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      // ngitung jumlah donasi barang pada target tersebut
        Schema::create('relasibarangtarget', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_donasibarang')->constrained('donasibarang')->onDelete('cascade'); // id donasi
            $table->foreignId('id_programbarang')->constrained('targetbarang')->onDelete('cascade'); // id program
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('relasibarangtarget');
    }
};