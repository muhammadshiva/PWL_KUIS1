<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
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
                'name' => 'The Fast and The Furious 8',
                'harga' => 'Rp. 50.000,.',
                'stock' => '3'
            ],
            [
                'name' => 'Tom and Jerry',
                'harga' => 'Rp. 60.000,.',
                'stock' => '4'
            ],
            [
                'name' => 'Nara & The Dragon',
                'harga' => 'Rp. 45.000,.',
                'stock' => '2'
            ],
            [
                'name' => 'Monster Hunter',
                'harga' => 'Rp. 55.000,.',
                'stock' => '2'
            ],
            [
                'name' => 'Wonder Woman 1984',
                'harga' => 'Rp. 70.000,.',
                'stock' => '1'
            ],
            [
                'name' => 'Red Dot',
                'harga' => 'Rp. 30.000,.',
                'stock' => '3'
            ],
            [
                'name' => 'Outside The Wire',
                'harga' => 'Rp. 40.000,.',
                'stock' => '4'
            ],
            [
                'name' => 'The Little Things',
                'harga' => 'Rp. 65.000,.',
                'stock' => '5'
            ],
        ];

        DB::table('barangs')->insert($data);
    }
}
