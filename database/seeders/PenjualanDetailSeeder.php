<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $data[] = [
                    'sales_id'  => $i,                // ✅ correct column
                    'barang_id' => rand(1, 15),
                    'jumlah'    => rand(1, 5),
                    'harga'     => rand(10000, 50000) // ✅ REQUIRED
                ];
            }
        }

        DB::table('t_sales_detail')->insert($data);
    }
}
