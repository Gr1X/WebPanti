<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      // ngitung jumlah donasi pada program tersebut
        Schema::create('relasitunaitarget', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_donasitunai')->constrained('donasitunai')->onDelete('cascade'); // id donasi
            $table->foreignId('id_targettunai')->constrained('targettunai')->onDelete('cascade'); // id program
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('relasitunaitarget');
    }
};
