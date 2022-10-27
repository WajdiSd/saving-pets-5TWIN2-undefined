<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use lluminate\Database\Schema\ForeignKeyDefinition;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('pet_vaccines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->constrained('pets');
            $table->foreignId('vaccine_id')->constrained('vaccines');
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
        Schema::table('PetVaccine', function (Blueprint $table) {
            //
        });
    }
};
