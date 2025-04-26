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
        Schema::create('acciones_capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('area',200);
            $table->string('nombre',200);
            $table->string('texto_constancia',200);
            $table->string('capacitadores',400);
            $table->string('objetivo',1000);
            $table->integer('duracion');
            $table->string('nivel',100);
            $table->integer('annio');
            $table->string('cargos',600);
            $table->foreignId('id_programa_capacitacion')->nullable()->constrained('programas_capacitaciones');
            $table->foreignId('id_trimestre')->nullable()->constrained('trimestres_capacitaciones');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acciones_capacitaciones');
    }
};
