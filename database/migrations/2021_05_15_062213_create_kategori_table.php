<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerekTable extends Migration
{
    public function up()
    {
        Schema::create('merek', function (Blueprint $table) {

		$table->integer('ID_Merek',11);
		$table->string('namaMerek',50);
		$table->string('gambarMerek',25);

        });
    }

    public function down()
    {
        Schema::dropIfExists('merek');
    }
}