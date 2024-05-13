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
        Schema::create('tukang',function(Blueprint $table){
            $table->increments('id_tukang');
            $table->string('nama_tukang')->nullable();
            $table->string('email_tukang')->unique();
            $table->string('password_tukang');
            $table->string('telp_tukang')->nullable();
            $table->string('nama_jasa')->nullable();
            $table->text('keterangan_jasa')->nullable();
            $table->string('latitude_tukang')->nullable();
            $table->string('longitude_tukang')->nullable();
            $table->text('alamat_tukang')->nullable();
            $table->string('spesifikasi_tukang')->nullable();
            $table->string('jangkauan_kategori_tukang')->nullable();
            $table->text('foto_tukang')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('tukang'); 
    }
};
