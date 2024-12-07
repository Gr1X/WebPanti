<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      // donasi tunai
        Schema::create('donasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // id user yang berdonasi
            $table->decimal('jumlah', 10, 2); // jumlah donasi tunai
            $table->text('notes')->nullable(); // catatan
            $table->timestamp('waktu_donasi'); // waktu donasi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donasitunai');
    }
};
