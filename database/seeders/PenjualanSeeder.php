<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'user_id'     => rand(1, 3),
                'tanggal'     => now(),
                'total_harga' => rand(50000, 200000), // ✅ REQUIRED
            ];
        }

        DB::table('t_sales')->insert($data);
    }
}
