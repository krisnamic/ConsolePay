<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {

		$table->integer('ID_Barang',11);
		$table->integer('ID_Kategori',11);
		$table->integer('ID_Merek',11);
		$table->string('kategoriBarang',16);
		$table->string('merekBarang',9);
		$table->string('namaBarang',26);
		$table->string('deskripsiBarang',168);
		$table->integer('hargaBarang',11);
		$table->integer('stokBarang',11);
		$table->string('gambarBarang',50);
		$table->string('logoBarang',50);

        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}