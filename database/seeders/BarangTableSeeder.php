<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BarangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('barang')->delete();
        
        DB::table('barang')->insert(array (
            0 => 
            array (
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation Portable (PSP)',
                'deskripsiBarang' => 'The PlayStation Portable (PSP) is a handheld video game console developed and marketed by Sony Computer Entertainment.',
                'hargaBarang' => 17500,
                'stokBarang' => 12,
                'gambarBarang' => 'psp.png',
                'logoBarang' => 'logo-psp.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            1 => 
            array (
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation Vita (PS Vita)',
                'deskripsiBarang' => 'The PlayStation Vita (PS Vita or Vita) is a handheld video game console developed and marketed by Sony Computer Entertainment.',
                'hargaBarang' => 25000,
                'stokBarang' => 10,
                'gambarBarang' => 'psvita.png',
                'logoBarang' => 'logo-psvita.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            2 => 
            array (
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation 3',
                'deskripsiBarang' => 'The PlayStation 3 is set to bring you a higher level of entertainment experience with a lighter and slimmer body, more than 1000 titles, and Blu-ray entertainment.',
                'hargaBarang' => 30000,
                'stokBarang' => 6,
                'gambarBarang' => 'ps3.png',
                'logoBarang' => 'logo-ps3.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            3 => 
            array (
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation 4',
                'deskripsiBarang' => 'The PlayStation 4 (PS4) is a home video game console developed by Sony Computer Entertainment.',
                'hargaBarang' => 125000,
                'stokBarang' => 6,
                'gambarBarang' => 'ps4.png',
                'logoBarang' => 'logo-ps4.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            4 => 
            array (
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation 5',
                'deskripsiBarang' => 'Experience lightning-fast loading with an ultra-high-speed SSD, deeper immersion with support for haptic feedback, adaptive triggers and 3D Audio with Playstation 5.',
                'hargaBarang' => 400000,
                'stokBarang' => 4,
                'gambarBarang' => 'ps5.png',
                'logoBarang' => 'logo-ps5.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            5 => 
            array (
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo DS',
                'deskripsiBarang' => 'The Nintendo DS is a handheld video game console developed by Nintendo.',
                'hargaBarang' => 10000,
                'stokBarang' => 20,
                'gambarBarang' => 'ds.png',
                'logoBarang' => 'logo-ds.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            6 => 
            array (
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo 2DS',
                'deskripsiBarang' => 'The Nintendo 2DS brings the power of two systems together into a single, affordable package. Play all games both Nintendo DS and Nintendo 3DS in 2D.',
                'hargaBarang' => 70000,
                'stokBarang' => 16,
                'gambarBarang' => '2ds.png',
                'logoBarang' => 'logo-2ds.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            7 => 
            array (
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo 3DS',
                'deskripsiBarang' => 'The Nintendo 3DS offers a new way to play, experience 3D without the need for special glasses.',
                'hargaBarang' => 50000,
                'stokBarang' => 10,
                'gambarBarang' => '3ds.png',
                'logoBarang' => 'logo-3ds.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            8 => 
            array (
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo 3DS XL',
                'deskripsiBarang' => 'The Nintendo 3DS XL offers the biggest screens, new speed, new controls, new 3D viewing, and a whole new experience.',
                'hargaBarang' => 65000,
                'stokBarang' => 8,
                'gambarBarang' => '3ds-xl.png',
                'logoBarang' => 'logo-3ds-xl.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            9 => 
            array (
                'kategoriBarang' => 'Hybrid Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo Switch',
                'deskripsiBarang' => 'The Nintendo Switch is designed to fit your life, transforming from home console to portable system in a snap.',
                'hargaBarang' => 125000,
                'stokBarang' => 10,
                'gambarBarang' => 'switch.png',
                'logoBarang' => 'logo-switch.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            10 => 
            array (
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo Switch Lite',
                'deskripsiBarang' => 'The Nintendo Switch Lite is designed specifically for handheld play—so you can jump into your favorite games wherever you happen to be.',
                'hargaBarang' => 110000,
                'stokBarang' => 6,
                'gambarBarang' => 'switch-lite.png',
                'logoBarang' => 'logo-switch-lite.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            11 => 
            array (
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox 360',
                'deskripsiBarang' => 'Xbox 360 Console. Wi-Fi is built-in for easier connection to the world of entertainment on Xbox LIVE, where HD movies and TV stream in an instant.',
                'hargaBarang' => 50000,
                'stokBarang' => 6,
                'gambarBarang' => 'xbox360.png',
                'logoBarang' => 'logo-xbox360.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            12 => 
            array (
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox One',
                'deskripsiBarang' => 'Xbox One supports spatial sound. Play thousands of games and enjoy built-in 4K Ultra HD and 4K video streaming on the Xbox One S console.',
                'hargaBarang' => 75000,
                'stokBarang' => 6,
                'gambarBarang' => 'xbox-one.png',
                'logoBarang' => 'logo-xbox-one.png',
                'created_at' => now(),
                'updated_at' => now()
            ),
            13 => 
            array (
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox One S',
                'deskripsiBarang' => 'Explore the world of Xbox with Xbox One S. Play thousands of games and enjoy built-in 4K Ultra HD and 4K video streaming on the Xbox One S console.',
                'hargaBarang' => 90000,
                'stokBarang' => 3,
                'gambarBarang' => 'xbox-one-s.png',
                'logoBarang' => 'logo-xbox-one-s.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
            14 => 
            array (
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox Series X',
                'deskripsiBarang' => 'The Xbox Series X target performance is to render games at 4K resolution at 60 frames per second, with the console being about four times as powerful as the Xbox One X.',
                'hargaBarang' => 375000,
                'stokBarang' => 4,
                'gambarBarang' => 'xbox-series-x.png',
                'logoBarang' => 'logo-xbox-series-x.svg',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ));
        
        
    }
}
