<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CreateSocialMediaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Post::factory(10)->create();

        $this->call([
            CreateSocialMediaSeeder::class,
        ]);

        User::factory()
            ->hasPosts(10)
            ->create();


    }
}
