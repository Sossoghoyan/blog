<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('cars', function (Blueprint $table) {
        $table->id();
        $table->string('Brand', 100)->nullable();
        $table->string('Model', 100)->nullable();
        $table->integer('Year')->nullable();
        $table->integer('Mileage')->nullable();
        $table->string('Color')->nullable();
        $table->string('Price')->nullable();
  
      });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
