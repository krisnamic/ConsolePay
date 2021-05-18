<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('kategori')->delete();
        
        DB::table('kategori')->insert(array (
            0 => 
            array (
                'ID_Kategori' => 1,
                'namaKategori' => 'Handheld Console',
            ),
            1 => 
            array (
                'ID_Kategori' => 2,
                'namaKategori' => 'Home Console',
            ),
            2 => 
            array (
                'ID_Kategori' => 3,
                'namaKategori' => 'Hybrid Console',
            ),
        ));
        
        
    }
}