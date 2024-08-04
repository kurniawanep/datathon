<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearlyRainfallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearly_rainfall', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->unique(); // Ensure each year is unique
            $table->decimal('precipitation', 5, 3); // Store precipitation with up to 3 decimal places
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
        Schema::dropIfExists('yearly_rainfall');
    }
}
