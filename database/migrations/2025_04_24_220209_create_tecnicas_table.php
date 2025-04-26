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
        Schema::create('tecnicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tecnica',200);
            $table->string('descripcion',700);
            $table->string('variedad',500);
            $table->foreignId('id_rama')->nullable()->constrained('ramas_artesanales');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnicas');
    }
};
