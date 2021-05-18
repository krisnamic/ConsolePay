<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MerekTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('merek')->delete();
        
        DB::table('merek')->insert(array (
            0 => 
            array (
                'ID_Merek' => 1,
                'namaMerek' => 'Sony',
                'gambarMerek' => 'playstation.sv',
            ),
            1 => 
            array (
                'ID_Merek' => 2,
                'namaMerek' => 'Nintendo',
                'gambarMerek' => 'nintendo.svg',
            ),
            2 => 
            array (
                'ID_Merek' => 3,
                'namaMerek' => 'Microsoft',
                'gambarMerek' => 'microsoft.svg',
            ),
        ));
        
        
    }
}