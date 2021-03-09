<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
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
                'title' => 'Cras convallis mollis justo',
                'content' => 'Sed dapibus vulputate diam nec hendrerit. In libero purus, interdum vitae purus nec, convallis sollicitudin nunc. Curabitur maximus maximus ex a scelerisque.',
                'icon' => 'fas fa-headphones',
                'draft' => 0
            ],
            [
                'title' => 'Nullam dictum pretium',
                'content' => 'Quisque vestibulum lectus eros, tincidunt ultricies ante euismod non. Ut sed consequat est, quis lobortis lorem. Nullam dictum pretium mauris eu aliquam.',
                'icon' => 'fas fa-broadcast-tower',
                'draft' => 0
            ],
            [
                'title' => 'Etiam in quam dolor',
                'content' => 'Aliquam in congue diam, non tincidunt ligula. Suspendisse facilisis elit eget quam semper aliquet. Donec ut purus aliquet, imperdiet lacus id, faucibus lectus.',
                'icon' => 'fas fa-headphones',
                'draft' => 0
            ],
            [
                'title' => 'Duis ornare felis nec orci',
                'content' => 'Nam dapibus lectus ultricies neque feugiat eleifend. Donec ornare dolor suscipit metus hendrerit, vel malesuada neque mattis. Fusce posuere cursus mattis.',
                'icon' => 'far fa-map',
                'draft' => 0
            ],
            [
                'title' => 'Class aptent taciti sociosqu',
                'content' => 'Maecenas et libero in eros laoreet finibus sed vitae diam. Etiam consetetur, nunc sed pretium elementum, diam erat fringilla tortor, placerat condimentum.',
                'icon' => 'fas fa-rainbow',
                'draft' => 0
            ],
            [
                'title' => 'Suspendisse ut malesuada',
                'content' => 'Vestibulum non lectus id lacus aliquet porttitor in non nulla. Aenean urna diam, finibys id lorem nec, feugiat convallis dolor. Integer aliquam, eros eget rutrum iaculis.',
                'icon' => 'fas fa-cloud-sun-rain',
                'draft' => 0
            ],
        ];
        DB::table('features')->insert($data);
    }
}
