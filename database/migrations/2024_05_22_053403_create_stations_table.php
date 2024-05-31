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
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('location'); // Location column
            $table->string('name'); // Name column
            $table->integer('parking_slots'); // Number of parking slots column
            $table->integer('max_people'); // Maximum number of people column
            $table->foreignId('person_id')->constrained('people'); // Foreign key to the people table
            $table->foreignId('access_id')->constrained('access'); // Foreign key to the access table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stations');
    }
};
