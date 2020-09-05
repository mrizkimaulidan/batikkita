<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_produk')->insert([
            'nama_kategori' => 'Pakaian'
        ]);
    }
}
