<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produk_tabel_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(array(
            ['nama_produk'=>	'Sabun	Lifebuoy',	'harga_jual'	=>	'2000'],
            ['nama_produk'=>	'Shampoo	Sunsilk',	'harga_jual'	=>	'4000']
    ));
}
    }
