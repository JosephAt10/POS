<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 👈 ADD THIS

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode_kategori' => 'KTG01',
                'nama_kategori' => 'Makanan & Minuman',
            ],
            [
                'kode_kategori' => 'KTG02',
                'nama_kategori' => 'Kesehatan & Kecantikan',
            ],
            [
                'kode_kategori' => 'KTG03',
                'nama_kategori' => 'Peralatan Rumah Tangga',
            ],
            [
                'kode_kategori' => 'KTG04',
                'nama_kategori' => 'Perlengkapan Bayi',
            ],
            [
                'kode_kategori' => 'KTG05',
                'nama_kategori' => 'Elektronik',
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
