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
        Schema::create('pelanggan',function (Blueprint $table){
            $table->increments('id_pelanggan');
            $table->string('nama_pelanggan');
            $table->string('email_pelanggan');
            $table->string('password_pelanggan')->unique();
            $table->string('telp_pelanggan')->nullable();
            $table->string('latitude_pelanggan')->nullable();
            $table->string('longitude_pelanggan')->nullable();
            $table->text('alamat_pelanggan')->nullable();
            $table->string('jk_pelanggan')->nullable();
            $table->text('foto_pelanggan')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
