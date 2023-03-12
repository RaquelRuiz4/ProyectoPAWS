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
        Schema::create('perro', function (Blueprint $table) {
            $table->id("idPer");
            $table->unsignedBigInteger("idDue");
            $table->unsignedBigInteger("idVet")->nullable();

            $table->string("nombrePerro", 50);
            $table->string("raza", 50);
            $table->tinyInteger('edad');
            $table->float('peso');
            $table->string("genero", 10);
            $table->string("fotoPerro")->nullable();

            // definición de claves foráneas
            $table->foreign("idDue")
                ->references("idUsu")->on("usuario")
                ->onDelete("cascade");

            $table->foreign("idVet")
                ->references("idUsu")->on("usuario")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perro');
    }
};