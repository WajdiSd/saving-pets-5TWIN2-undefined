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
        Schema::table('pets', function (Blueprint $table) {
            $table->unsignedBigInteger('enclos_id')->nullable();
            $table->unsignedBigInteger('sterilization_id')->nullable();

            //relation 
            $table->foreign('enclos_id')->references('id')->on('enclos')->onDelete('set null');
            $table->foreign('sterilization_id')->references('id')->on('sterilizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            //
        });
    }
};
