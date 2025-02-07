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
        schema::create('letter_dni', function (Blueprint $table){
            $table->id();
            $table->enum('letter', ['R', 'T', 'W', 'Y', 'G', 'M', 'A', 'F', 'X', 'D', 'P', 'B', 'N', 'J', 'Q', 'S', 'Z', 'V', 'H', 'E', 'C', 'K', 'L']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_dni');
    }
};
