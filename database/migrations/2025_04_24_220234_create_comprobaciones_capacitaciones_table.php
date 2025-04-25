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
        Schema::create('comprobaciones_capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_accion_capacitacion')->nullable()->constrained('acciones_capacitaciones');
            $table->double('monto');
            $table->foreignId('id_artesano')->nullable()->constrained('artesanos','id_artesano');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobaciones_capacitaciones');
    }
};
