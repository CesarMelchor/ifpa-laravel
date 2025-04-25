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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->text('ramas_ids');
            $table->text('descripciones_ramas');
            $table->string('antiguedad',100);
            $table->string('nombre_taller',200);
            $table->tinyInteger('registro_marca',1);
            $table->tinyInteger('terminal_venta',1);
            $table->tinyInteger('certificacion_oaxaca',1);
            $table->tinyInteger('expoferia_anterior',1);
            $table->tinyInteger('aripo_credencial',1);
            $table->text('path_credencial');
            $table->text('path_carta');
            $table->text('fotos_productos_paths');
            $table->text('fotos_talleres_paths');
            $table->foreignId('id_artesano')->nullable()->constrained('artesanos','id_artesano');
            $table->foreignId('id_grupo_etnico')->nullable()->constrained('grupos_etnicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
