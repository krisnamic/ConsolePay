<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->delete();

        DB::table('barang')->insert(array(
            0 =>
            array(
                'ID_Barang' => 1,
                'ID_Kategori' => 1,
                'ID_Merek' => 1,
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation Portable (PSP)',
                'deskripsiBarang' => 'The PlayStation Portable (PSP) is a handheld video game console developed and marketed by Sony Computer Entertainment.',
                'hargaBarang' => 17500,
                'stokBarang' => 12,
                'gambarBarang' => 'psp.png',
                'logoBarang' => 'logo-psp.svg',
            ),
            1 =>
            array(
                'ID_Barang' => 2,
                'ID_Kategori' => 1,
                'ID_Merek' => 1,
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation Vita (PS Vita)',
                'deskripsiBarang' => 'The PlayStation Vita (PS Vita or Vita) is a handheld video game console developed and marketed by Sony Computer Entertainment.',
                'hargaBarang' => 25000,
                'stokBarang' => 10,
                'gambarBarang' => 'psvita.png',
                'logoBarang' => 'logo-psvita.svg',
            ),
            2 =>
            array(
                'ID_Barang' => 3,
                'ID_Kategori' => 2,
                'ID_Merek' => 1,
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation 3',
                'deskripsiBarang' => 'The PlayStation 3 is set to bring you a higher level of entertainment experience with a lighter and slimmer body, more than 1000 titles, and Blu-ray entertainment.',
                'hargaBarang' => 30000,
                'stokBarang' => 6,
                'gambarBarang' => 'ps3.png',
                'logoBarang' => 'logo-ps3.svg',
            ),
            3 =>
            array(
                'ID_Barang' => 4,
                'ID_Kategori' => 2,
                'ID_Merek' => 1,
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation 4',
                'deskripsiBarang' => 'The PlayStation 4 (PS4) is a home video game console developed by Sony Computer Entertainment.',
                'hargaBarang' => 125000,
                'stokBarang' => 6,
                'gambarBarang' => 'ps4.png',
                'logoBarang' => 'logo-ps4.svg',
            ),
            4 =>
            array(
                'ID_Barang' => 5,
                'ID_Kategori' => 2,
                'ID_Merek' => 1,
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Sony',
                'namaBarang' => 'PlayStation 5',
                'deskripsiBarang' => 'Experience lightning-fast loading with an ultra-high-speed SSD, deeper immersion with support for haptic feedback, adaptive triggers and 3D Audio with Playstation 5.',
                'hargaBarang' => 400000,
                'stokBarang' => 4,
                'gambarBarang' => 'ps5.png',
                'logoBarang' => 'logo-ps5.svg',
            ),
            5 =>
            array(
                'ID_Barang' => 6,
                'ID_Kategori' => 1,
                'ID_Merek' => 2,
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo DS',
                'deskripsiBarang' => 'The Nintendo DS is a handheld video game console developed by Nintendo.',
                'hargaBarang' => 10000,
                'stokBarang' => 20,
                'gambarBarang' => 'ds.png',
                'logoBarang' => 'logo-ds.svg',
            ),
            6 =>
            array(
                'ID_Barang' => 7,
                'ID_Kategori' => 1,
                'ID_Merek' => 2,
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo 2DS',
                'deskripsiBarang' => 'The Nintendo 2DS brings the power of two systems together into a single, affordable package. Play all games both Nintendo DS and Nintendo 3DS in 2D.',
                'hargaBarang' => 70000,
                'stokBarang' => 16,
                'gambarBarang' => '2ds.png',
                'logoBarang' => 'logo-2ds.svg',
            ),
            7 =>
            array(
                'ID_Barang' => 8,
                'ID_Kategori' => 1,
                'ID_Merek' => 2,
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo 3DS',
                'deskripsiBarang' => 'The Nintendo 3DS offers a new way to play, experience 3D without the need for special glasses.',
                'hargaBarang' => 50000,
                'stokBarang' => 10,
                'gambarBarang' => '3ds.png',
                'logoBarang' => 'logo-3ds.svg',
            ),
            8 =>
            array(
                'ID_Barang' => 9,
                'ID_Kategori' => 1,
                'ID_Merek' => 2,
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo 3DS XL',
                'deskripsiBarang' => 'The Nintendo 3DS XL offers the biggest screens, new speed, new controls, new 3D viewing, and a whole new experience.',
                'hargaBarang' => 65000,
                'stokBarang' => 8,
                'gambarBarang' => '3ds-xl.png',
                'logoBarang' => 'logo-3ds-xl.svg',
            ),
            9 =>
            array(
                'ID_Barang' => 10,
                'ID_Kategori' => 3,
                'ID_Merek' => 2,
                'kategoriBarang' => 'Hybrid Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo Switch',
                'deskripsiBarang' => 'The Nintendo Switch is designed to fit your life, transforming from home console to portable system in a snap.',
                'hargaBarang' => 125000,
                'stokBarang' => 10,
                'gambarBarang' => 'switch.png',
                'logoBarang' => 'logo-switch.svg',
            ),
            10 =>
            array(
                'ID_Barang' => 11,
                'ID_Kategori' => 1,
                'ID_Merek' => 2,
                'kategoriBarang' => 'Handheld Console',
                'merekBarang' => 'Nintendo',
                'namaBarang' => 'Nintendo Switch Lite',
                'deskripsiBarang' => 'The Nintendo Switch Lite is designed specifically for handheld play—so you can jump into your favorite games wherever you happen to be.',
                'hargaBarang' => 110000,
                'stokBarang' => 6,
                'gambarBarang' => 'switch-lite.png',
                'logoBarang' => 'logo-switch-lite.svg',
            ),
            11 =>
            array(
                'ID_Barang' => 12,
                'ID_Kategori' => 2,
                'ID_Merek' => 3,
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox 360',
                'deskripsiBarang' => 'Xbox 360 Console. Wi-Fi is built-in for easier connection to the world of entertainment on Xbox LIVE, where HD movies and TV stream in an instant.',
                'hargaBarang' => 50000,
                'stokBarang' => 6,
                'gambarBarang' => 'xbox360.png',
                'logoBarang' => 'logo-xbox360.svg',
            ),
            12 =>
            array(
                'ID_Barang' => 13,
                'ID_Kategori' => 2,
                'ID_Merek' => 3,
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox One',
                'deskripsiBarang' => 'Xbox One supports spatial sound. Play thousands of games and enjoy built-in 4K Ultra HD and 4K video streaming on the Xbox One S console.',
                'hargaBarang' => 75000,
                'stokBarang' => 6,
                'gambarBarang' => 'xbox-one.png',
                'logoBarang' => 'logo-xbox-one.png',
            ),
            13 =>
            array(
                'ID_Barang' => 14,
                'ID_Kategori' => 2,
                'ID_Merek' => 3,
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox One S',
                'deskripsiBarang' => 'Explore the world of Xbox with Xbox One S. Play thousands of games and enjoy built-in 4K Ultra HD and 4K video streaming on the Xbox One S console.',
                'hargaBarang' => 90000,
                'stokBarang' => 3,
                'gambarBarang' => 'xbox-one-s.png',
                'logoBarang' => 'logo-xbox-one-s.svg',
            ),
            14 =>
            array(
                'ID_Barang' => 15,
                'ID_Kategori' => 2,
                'ID_Merek' => 3,
                'kategoriBarang' => 'Home Console',
                'merekBarang' => 'Microsoft',
                'namaBarang' => 'Xbox Series X',
                'deskripsiBarang' => 'The Xbox Series X target performance is to render games at 4K resolution at 60 frames per second, with the console being about four times as powerful as the Xbox One X.',
                'hargaBarang' => 375000,
                'stokBarang' => 4,
                'gambarBarang' => 'xbox-series-x.png',
                'logoBarang' => 'logo-xbox-series-x.svg',
            ),
        ));
    }
}