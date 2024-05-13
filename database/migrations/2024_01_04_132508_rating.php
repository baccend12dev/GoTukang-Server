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
        Schema:: create('rating' ,function(Blueprint $table){
            $table->increments('id_rating');
            $table->integer('id_tukang')->unsigned();
            $table->integer('kriteria_1')->unsigned()->nullable();
            $table->integer('kriteria_2')->unsigned()->nullable();
            $table->integer('kriteria_3')->unsigned()->nullable();
            $table->integer('kriteria_4')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
    }
};
