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
        Schema::table('sterilizations', function (Blueprint $table) {
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('veto_id')->nullable();
            $table->foreign('pet_id')
                ->references('id')->on('pets');
            $table->foreign('veto_id')
                ->references('id')->on('veterinarians')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sterilizations', function (Blueprint $table) {
            //
        });
    }
};
