<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([PostSeeder::class, TestimonialSeeder::class, FeatureSeeder::class, UserSeeder::class]);
        Post::factory(100)->create();
        Testimonial::factory(100)->create();
        Feature::factory(100)->create();
        User::factory(100)->create();
    }
}
