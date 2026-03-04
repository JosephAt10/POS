<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'barang_id' => $i,
                'jumlah'    => rand(10, 100),   // ✅ correct column name
                'tanggal'   => now(),           // ✅ required field
            ];
        }

        DB::table('t_stock')->insert($data);
    }
}
