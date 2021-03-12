<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
                'name' => '	Muhammad Shiva',
                'telepon' => '(021)-8494321',
                'alamat' => 'Jl. Boulevard Kota Wisata, Jakarta'
            ],
            [
                'name' => '	Naufal Yukafi Ridlo',
                'telepon' => '(021)-6232011',
                'alamat' => 'LTC Glodok Lt. SB Blok C1 No.10Jl, Jakarta'
            ],
            [
                'name' => '	Dani Satria',
                'telepon' => '(021)-4321111',
                'alamat' => 'Jl. Dau, Malang'
            ],
            [
                'name' => '	Dewa Fikri',
                'telepon' => '(021)-4321222',
                'alamat' => 'Jl. Pandan, Malang'
            ],
            [
                'name' => '	Firdaus Maulana',
                'telepon' => '(021)-4321333',
                'alamat' => 'Jl. Kembang Kertas, Malang'
            ],
            
        ];

        DB::table('pelanggans')->insert($data);
    }
}
