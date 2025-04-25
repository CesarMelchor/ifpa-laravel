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
        Schema::create('inscripciones_capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('solicitud',15);
            $table->string('observaciones',700)->nullable();
            $table->tinyInteger('asistencia',1);
            $table->foreignId('id_artesano')->nullable()->constrained('artesanos','id_artesano');
            $table->foreignId('id_accion_capacitacion')->nullable()->constrained('acciones_capacitaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones_capacitaciones');
    }
};
