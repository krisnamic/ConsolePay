<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriTable extends Migration
{
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {

		$table->integer('ID_Kategori',11);
		$table->string('namaKategori',40);

        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}