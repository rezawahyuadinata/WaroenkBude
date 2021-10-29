<?php

use Illuminate\Database\Seeder;
use App\Barang;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {


        $barang = [
            [
                'nama_barang' => 'Ayam Taliwang',
                'jenis' => '0',
                'gambar' => '/images/projek_gambar/list_masakan/kering/ayamtaliwang.jpg',
                'harga' => '20000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Bebek Taliwang',
                'jenis' => '0',
                'gambar' => '/images/projek_gambar/list_masakan/kering/bebekmadura.jpg',
                'harga' => '30000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Gulai Belacan',
                'jenis' => '0',
                'gambar' => '/images/projek_gambar/list_masakan/kering/gulaibelacan.jpg',
                'harga' => '30000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Ikan Bakar',
                'jenis' => '0',
                'gambar' => '/images/projek_gambar/list_masakan/kering/ikanbakar.jpg',
                'harga' => '25000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Rendang',
                'jenis' => '0',
                'gambar' => '/images/projek_gambar/list_masakan/kering/rendang.jpg',
                'harga' => '15000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Sop Daging',
                'jenis' => '1',
                'gambar' => '/images/projek_gambar/list_masakan/basah/sopdaging.jpg',
                'harga' => '13000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Sop Ikan Kakap',
                'jenis' => '1',
                'gambar' => '/images/projek_gambar/list_masakan/basah/sopikan.jpg',
                'harga' => '27000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Sop Kimlo',
                'jenis' => '1',
                'gambar' => '/images/projek_gambar/list_masakan/basah/sopkimlo.jpg',
                'harga' => '17000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Sop Oyong',
                'jenis' => '1',
                'gambar' => '/images/projek_gambar/list_masakan/basah/sopoyong.jpg',
                'harga' => '20000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Sop Telur Puyuh',
                'jenis' => '1',
                'gambar' => '/images/projek_gambar/list_masakan/basah/soptelurpuyuh.jpg',
                'harga' => '15000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Sambal Ikan Teri',
                'jenis' => '2',
                'gambar' => '/images/projek_gambar/list_masakan/pelengkap/ikanterisambal.jpg',
                'harga' => '5000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Kentang Balado',
                'jenis' => '2',
                'gambar' => '/images/projek_gambar/list_masakan/pelengkap/kentangbalado.jpg',
                'harga' => '75000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Orek Tempe',
                'jenis' => '2',
                'gambar' => '/images/projek_gambar/list_masakan/pelengkap/orektempe.jpg',
                'harga' => '9000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Telur dadar',
                'jenis' => '2',
                'gambar' => '/images/projek_gambar/list_masakan/pelengkap/telordadar.jpg',
                'harga' => '7000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Nasi',
                'jenis' => '2',
                'gambar' => '/images/projek_gambar/list_masakan/pelengkap/nasi.jpeg',
                'harga' => '5000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Tumis Toge',
                'jenis' => '2',
                'gambar' => '/images/projek_gambar/list_masakan/pelengkap/tumistoge.jpg',
                'harga' => '5000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Anggur',
                'jenis' => '3',
                'gambar' => '/images/projek_gambar/list_masakan/buah/anggur.jpg',
                'harga' => '20000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Jeruk',
                'jenis' => '3',
                'gambar' => '/images/projek_gambar/list_masakan/buah/jeruk.jpg',
                'harga' => '15000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Melon',
                'jenis' => '3',
                'gambar' => '/images/projek_gambar/list_masakan/buah/melon.jpg',
                'harga' => '15000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Semangka',
                'jenis' => '3',
                'gambar' => '/images/projek_gambar/list_masakan/buah/semangka.jpg',
                'harga' => '13000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Stroberi',
                'jenis' => '3',
                'gambar' => '/images/projek_gambar/list_masakan/buah/strawberry.jpg',
                'harga' => '20000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'jus Alpukat',
                'jenis' => '4',
                'gambar' => '/images/projek_gambar/list_masakan/minuman/jus_alpukat.jpg',
                'harga' => '75000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Jus Apel',
                'jenis' => '4',
                'gambar' => '/images/projek_gambar/list_masakan/minuman/jus_apel.jpg',
                'harga' => '75000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Jus Jeruk',
                'jenis' => '4',
                'gambar' => '/images/projek_gambar/list_masakan/minuman/jus_jeruk.jpg',
                'harga' => '75000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Jus Buah Naga',
                'jenis' => '4',
                'gambar' => '/images/projek_gambar/list_masakan/minuman/jus_naga.jpg',
                'harga' => '75000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Jus Nanas',
                'jenis' => '4',
                'gambar' => '/images/projek_gambar/list_masakan/minuman/jus_nanas.jpg',
                'harga' => '75000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Aqua',
                'jenis' => '4',
                'gambar' => '/images/projek_gambar/list_masakan/minuman/aqua.jpeg',
                'harga' => '3000',
                'stok' => '50',
                'keterangan' => 'Pembelian diatas 20 item mendapatkan potongan 20%',
            ],

            [
                'nama_barang' => 'Paket Bungkus 1',
                'jenis' => '5',
                'gambar' => '',
                'harga' => '75000',
                'stok' => '50',
                'keterangan' => 'Nasi + Ayam Taliwang + Bebek Taliwang + Sop Daging + Kentang Balado + Aqua ',
            ],

            [
                'nama_barang' => 'Paket Bungkus 2',
                'jenis' => '5',
                'gambar' => '',
                'harga' => '55000',
                'stok' => '50',
                'keterangan' => 'Nasi + Gulai Belacan + Sambal Ikan Teri + Sop Ikan Kakap + jus Alpukat',
            ],

            [
                'nama_barang' => 'Paket Bungkus 3',
                'jenis' => '5',
                'gambar' => '',
                'harga' => '55000',
                'stok' => '50',
                'keterangan' => 'Nasi + Sop Telur Puyuh + Rendang + Telur Dadar + Jus Jeruk',
            ],

            [
                'nama_barang' => 'Paket Bungkus 4',
                'jenis' => '5',
                'gambar' => '',
                'harga' => '60000',
                'stok' => '50',
                'keterangan' => 'Nasi + Ikan Bakar + Sop Kimlo + Tumis Toge + Sambal Ikan Teri + Jus Nanas',
            ],

        ];

        foreach($barang as $key => $value) {
            barang::create($value);
        }
    }
}
