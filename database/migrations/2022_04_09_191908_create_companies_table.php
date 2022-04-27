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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('company_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('companies');

        // Schema::dropIfExists('companies');
        // Schema::table('users', function (Blueprint $table) {
        //     //$table->unsignedBigInteger('company_id')->nullable();
        //     $table->dropColumn('company_id');
        // });

    }
};



