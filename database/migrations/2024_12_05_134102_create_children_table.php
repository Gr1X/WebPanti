<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      // anak panti
        Schema::create('anakpanti', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('jeniskelamin');
            $table->string('status'); // aktif/non-aktif
            $table->string('tingkat_edukasi')->nullable(); // pendidikan terakhir
            $table->text('notes')->nullable(); // informasi tambahan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anakpanti');
    }
};

