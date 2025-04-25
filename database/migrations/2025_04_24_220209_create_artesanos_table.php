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
        Schema::create('artesanos', function (Blueprint $table) {
            $table->id();
            $table->string('id_artesano')->unique();
            $table->string('nombre',50);
            $table->string('primer_apellido',80);
            $table->string('segundo_apellido',80);
            $table->char('sexo',1);
            $table->date('fecha_nacimiento');
            $table->char('edo_civil',7);
            $table->string('curp',19)->unique();
            $table->string('clave_ine',20)->unique();
            $table->string('rfc',12)->nullable()->unique();
            $table->string('calle',50);
            $table->string('num_exterior',10);
            $table->string('num_interior',10);
            $table->char('cp',5);
            $table->string('seccion',50);
            $table->string('tel_fijo',10)->nullable();
            $table->string('tel_celular',10);
            $table->string('telefono_recados',10)->nullable();
            $table->string('correo',50)->nullable();
            $table->text('redes_sociales')->nullable();
            $table->string('escolaridad',100);
            $table->string('gpo_pertenencia',20);
            $table->date('fecha_entrega_credencial')->nullable();
            $table->string('folio_cuis',45)->nullable();
            $table->text('foto')->nullable();
            $table->text('nombre_archivo')->nullable();
            $table->text('comentarios')->nullable();
            $table->tinyInteger('activo',1);


            $table->foreignId('id_organizacion')->nullable()->constrained('organizaciones','id_organizacion');
            $table->foreignId('id_region')->nullable()->constrained('regiones');
            $table->foreignId('id_distrito')->nullable()->constrained('distritos');
            $table->foreignId('id_municipio')->nullable()->constrained('municipios');
            $table->foreignId('id_localidad')->nullable()->constrained('localidades');
            $table->foreignId('id_grupo_etnico')->nullable()->constrained('grupos_etnicos');
            $table->foreignId('id_materia_prima')->nullable()->constrained('materias_primas');
            $table->foreignId('id_venta_producto')->nullable()->constrained('ventas_productos');
            $table->foreignId('id_tipo_comprador')->nullable()->constrained('tipo_compradores');
            $table->foreignId('id_rama_artesanal')->nullable()->constrained('ramas_artesanales');
            $table->foreignId('id_tecnica')->nullable()->constrained('tecnicas');
            $table->foreignId('id_canal_venta')->nullable()->constrained('canales_ventas');
            $table->foreignId('id_lengua_indigena')->nullable()->constrained('lenguas_indigenas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artesanos');
    }
};
