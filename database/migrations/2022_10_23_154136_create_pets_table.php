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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enclos_id')->nullable();
            $table->unsignedBigInteger('sterilization_id')->nullable();
            $table->string("name");
            $table->string("type");
            $table->string("race");
            $table->integer("age");
            $table->date("captureDate");

            //relation 
            $table->foreign('enclos_id')->references('id')->on('enclos')->onDelete('set null');
            $table->foreign('sterilization_id')->references('id')->on('sterilizations');

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
        Schema::dropIfExists('pets');
    }
};
