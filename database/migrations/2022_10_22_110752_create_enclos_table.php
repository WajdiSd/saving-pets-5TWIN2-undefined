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
        Schema::create('enclos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('local_id')->nullable();
            $table->string("race", 20);
            $table->integer("capacity", 50);

            //relation 
            $table->foreign('local_id')->references('id')->on('locals');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enclos');
    }
};
