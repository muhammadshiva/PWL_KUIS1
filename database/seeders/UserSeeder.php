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
                'image' => '/assetsAdmin/img/faces/yukafi.jpg',
                'desc' => 'Lets work, lets develop a story!, Your time is limited, so dont waste it living someone elses life',
                'password' => Hash::make('admin123'),
                'level' => 'admin'
            ],
            [
                'name' => 'M. Shiva',
                'email' => 'shiva21@gmail.com',
                'Telepon' => '085864548943',
                'image' => '/assetsAdmin/img/faces/shiva.jpg',
                'desc' => 'Slow but sure, Patience with small details makes perfect a large work, like the universe',
                'password' => Hash::make('admin214'),
                'level' => 'admin'
            ],
            [
                'name' => 'Dakote Rice',
                'email' => 'dakoterice@gmail.com',
                'Telepon' => '085934581219',
                'image' => '/assetsAdmin/img/faces/card-profile1-square.jpg',
                'desc' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, debitis! Perspiciatis, accusantium delectus!',
                'password' => Hash::make('developer12'),
                'level' => 'developer'
            ],
            [
                'name' => 'Minerva Hooper',
                'email' => 'Minerva45@gmail.com',
                'Telepon' => '089934812171',
                'image' => '/assetsAdmin/img/faces/card-profile2-square.jpg',
                'desc' => 'I love you like Kanye loves Kanye I love Rick Owens’',
                'password' => Hash::make('developer34'),
                'level' => 'developer'
            ],
            [
                'name' => 'Sage Rodriguez',
                'email' => 'Rodriguez@gmail.com',
                'Telepon' => '085163541871',
                'image' => '/assetsAdmin/img/faces/marc.jpg',
                'desc' => 'Dont be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...',
                'password' => Hash::make('developer56'),
                'level' => 'developer'
            ]
        ];

        DB::table('users')->insert($data);
    }
}
