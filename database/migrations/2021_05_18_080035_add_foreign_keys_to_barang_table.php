<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('ID_Kategori', 'barang_ibfk_1')->references('ID_Kategori')->on('kategori')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_Merek', 'barang_ibfk_2')->references('ID_Merek')->on('merek')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropForeign('barang_ibfk_1');
            $table->dropForeign('barang_ibfk_2');
        });
    }
}
