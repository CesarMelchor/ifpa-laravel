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
        Schema::create('organizaciones', function (Blueprint $table) {
            $table->id(); $table->string('id_organizacion')->unique();
            $table->string('representante',100);
            $table->string('nombre_organizacion',200);
            $table->string('rfc',12)->nullable();
            $table->string('calle',50);
            $table->string('num_exterior',10);
            $table->string('num_interior',10);
            $table->char('cp',5);
            $table->string('tel_fijo',10)->nullable();
            $table->string('tel_celular',10);
            $table->string('correo',50)->nullable();
            $table->int('num_integrantes')->nullable();
            $table->int('num_hombres')->nullable();
            $table->int('num_mujeres')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('tipo_org',50)->nullable();
            $table->string('tipo',100)->nullable();

            $table->foreignId('id_region')->nullable()->constrained('regiones');
            $table->foreignId('id_distrito')->nullable()->constrained('distritos');
            $table->foreignId('id_municipio')->nullable()->constrained('municipios');
            $table->foreignId('id_localidad')->nullable()->constrained('localidades');
            $table->foreignId('id_rama_artesanal')->nullable()->constrained('ramas_artesanales');
            $table->foreignId('id_tecnica')->nullable()->constrained('tecnicas');
          
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizaciones');
    }
};
