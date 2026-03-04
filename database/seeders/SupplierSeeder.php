<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SUP01',
                'supplier_nama' => 'PT Sumber Jaya',
                'supplier_alamat' => 'Jakarta',
                'supplier_telp' => '081234567890',
            ],
            [
                'supplier_kode' => 'SUP02',
                'supplier_nama' => 'PT Makmur Abadi',
                'supplier_alamat' => 'Surabaya',
                'supplier_telp' => '082345678901',
            ],
            [
                'supplier_kode' => 'SUP03',
                'supplier_nama' => 'PT Sejahtera',
                'supplier_alamat' => 'Bandung',
                'supplier_telp' => '083456789012',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
