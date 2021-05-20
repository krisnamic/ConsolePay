<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('id_kategori');
            // $table->foreign('id_kategori')->references('id')->on('kategori');
            // $table->string('namaBarang');
            // $table->string('deskripsiBarang');
            // $table->integer('hargaBarang');
            // $table->string('gambarBarang');
            // $table->integer('stokBarang');
            // $table->timestamps();
            $table->integer('ID_Barang')->primary();
            // $table->integer('ID_Kategori')->index('ID_Kategori');
            // $table->integer('ID_Merek')->index('ID_Merek');
            $table->string('kategoriBarang', 16);
            $table->string('merekBarang', 9);
            $table->string('namaBarang', 26);
            $table->string('deskripsiBarang', 168);
            $table->integer('hargaBarang');
            $table->integer('stokBarang');
            $table->string('gambarBarang', 50);
            $table->string('logoBarang', 50);
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
        Schema::dropIfExists('barang');
    }
}
