<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearlyTemperaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearly_temperatures', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->unique(); // Ensure each year is unique
            $table->decimal('temperature', 5, 3); // Store temperature with up to 3 decimal places
            $table->timestamps(); // Optional, for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yearly_temperatures');
    }
}
