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
        Schema::create('species', function (Blueprint $table) {
            $table->increments('id'); // Campo autoincrementable
            $table->string('scientific_name');
            $table->string('common_name')->nullable();
            $table->string('family');
            $table->string('image')->nullable(); // Columna para la imagen de la especie
            $table->text('description')->nullable(); // Columna para la descripción de la especie
            $table->timestamp('publication_date')->nullable(); // Columna para la fecha de publicación
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
