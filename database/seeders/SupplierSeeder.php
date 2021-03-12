<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => '	PT Kalsa Triapsara Utama',
                'telepon' => '(021)-8494321',
                'alamat' => 'Jl. Boulevard Kota Wisata, Jakarta'
            ],
            [
                'name' => '	PT Momentous Instrumindo',
                'telepon' => '(021)-6232011',
                'alamat' => 'LTC Glodok Lt. SB Blok C1 No.10Jl, Jakarta'
            ],
            [
                'name' => '	PT Nava Film',
                'telepon' => '(021)-4321452',
                'alamat' => 'Jl. Dau, Malang'
            ],
            
        ];

        DB::table('suppliers')->insert($data);
    }
}
