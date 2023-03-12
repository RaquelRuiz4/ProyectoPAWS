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
        Schema::create('cita', function (Blueprint $table) {
            $table->id("idCit");
            $table->unsignedBigInteger("idPer");
            $table->unsignedBigInteger("idVet");
            $table->unsignedBigInteger("idDue");

            $table->timestamp("fecha_cita");

            // definición de claves foráneas
            $table->foreign("idPer")
                ->references("idPer")->on("perro")
                ->onDelete("cascade");

            $table->foreign("idVet")
                ->references("idUsu")->on("usuario")
                ->onDelete("cascade");

            $table->foreign("idDue")
                ->references("idUsu")->on("usuario")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita');
    }
};