<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'Naufal Yukafi',
                'email' => 'naufalyukafi10@gmail.com',
                'Telepon' => '085607287537',
                'password' => Hash::make('admin123'),
                'level' => 'admin'
            ],
            [
                'name' => 'M. Shiva',
                'email' => 'shiva21@gmail.com',
                'Telepon' => '085864548943',
                'password' => Hash::make('admin214'),
                'level' => 'admin'
            ],
            [
                'name' => 'Dakote Rice',
                'email' => 'dakoterice@gmail.com',
                'Telepon' => '085934581219',
                'password' => Hash::make('developer12'),
                'level' => 'developer'
            ],
            [
                'name' => 'Minerva Hooper',
                'email' => 'Minerva45@gmail.com',
                'Telepon' => '089934812171',
                'password' => Hash::make('developer34'),
                'level' => 'developer'
            ],
            [
                'name' => 'Sage Rodriguez',
                'email' => 'Rodriguez@gmail.com',
                'Telepon' => '085163541871',
                'password' => Hash::make('developer56'),
                'level' => 'developer'
            ]
        ];

        DB::table('users')->insert($data);
    }
}
