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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nombre
            $table->string('dpi')->unique(); // dpi
            $table->string('address'); // dirección
            $table->string('phone'); // teléfono
            $table->text('history')->nullable(); // historial
            $table->text('note')->nullable(); // nota
            $table->unsignedBigInteger('person_type_id'); // id tipo de persona
            $table->timestamps();

            // Agregar una clave foránea si es necesario
            $table->foreign('person_type_id')->references('id')->on('person_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
