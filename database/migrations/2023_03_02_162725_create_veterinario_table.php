<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veterinario', function (Blueprint $table) {
            $table->id("idUsu");
            $table->string("especialidad", 50);
            $table->string("foto")->nullable();

            $table->foreign("idUsu")
                ->references("idUsu")
                ->on("usuario")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinario');
    }
};