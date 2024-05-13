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
        Schema::create('detail_kategori', function (Blueprint $table){
            $table->increments('id_detail_kategori');
            $table->integer('id_tukang')->unsigned()->nullable();
            $table->integer('id_kategori')->unsigned()->nullable();
            $table->text('keterangan_kategori')->nullable();
            $table->string('keunggulan')->nullable();
            // $table->double('harga_bahan')->unsigned()->nullable();
            $table->double('ongkos_tukang')->unsigned()->nullable();
            $table->string('perkiraan_lama_waktu_pengerjaan')->nullable();
            
        });
        Schema::table('detail_kategori', function($table){
            $table->foreign('id_tukang')->references('id_tukang')->on('tukang')->onUpdate('cascade')->onDelete('cascade');;  
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onUpdate('cascade')->onDelete('cascade');;         
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kategori');
    }
};
