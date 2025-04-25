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
        Schema::create('ramas_artesanales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_rama',200);
            $table->string('descripcion',700);
            $table->tinyInteger('activo',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramas_artesanales');
    }
};
