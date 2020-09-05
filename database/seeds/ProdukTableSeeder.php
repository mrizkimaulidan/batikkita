<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'nama_produk' => 'Batik Mega Mendung',
                'id_kategori' => 1,
                'harga' => 110000,
                'deskripsi' => 'Batik Mega Mendung khas Cirebon',
                'gambar' => 'mega-mendung-cirebon.jpg'
            ],
            [
                'nama_produk' => 'Batik Parang',
                'id_kategori' => 1,
                'harga' => 77000,
                'deskripsi' => 'Batik Parang khas Solo',
                'gambar' => 'batik-parang-solo.jpg'
            ],
            [
                'nama_produk' => 'Batik Kalimantan',
                'id_kategori' => 1,
                'harga' => 85000,
                'deskripsi' => 'Batik Kalimantan khas Kalimantan',
                'gambar' => 'batik-kalimantan.jpg'
            ],
            [
                'nama_produk' => 'Batik Tujuh Rupa',
                'id_kategori' => 1,
                'harga' => 125000,
                'deskripsi' => 'Batik Tujuh Rupa khas Pekalongan',
                'gambar' => 'batik-tujuh-rupa-pekalongan.jpg'
            ],
            [
                'nama_produk' => 'Batik Sekar Jagad',
                'id_kategori' => 1,
                'harga' => 130000,
                'deskripsi' => 'Batik Sekar Jagad khas Solo',
                'gambar' => 'sekar-jagad-solo.jpg'
            ],
        ];
    }
}
