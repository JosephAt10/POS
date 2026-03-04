<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'barang_kode'   => 'BRG' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'barang_nama'   => 'Barang ' . $i,
                'kategori_id'   => rand(1, 5),
                'supplier_id'   => rand(1, 3),
                'harga_beli'    => rand(10000, 30000),
                'harga_jual'    => rand(30000, 50000),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
