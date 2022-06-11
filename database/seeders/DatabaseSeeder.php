<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create(
            ['name' => 'test','email' => 'test@test.com','password' => 12345678],
            //['name' => 'admin','email' => 'admin@admin.com','password' => 12345678],
        );
        \App\Models\User::factory(10)->create();


        $this->call([
            sportsSeeder::class,
            NationalitySeeder::class,
            AwardsSeeder::class,
            forcesSeeder::class,
            docsSeeder::class,
            GenderSeeder::class,
            categoriesSeeder::class,
            participantSeeder::class,
            CompetenceSeeder::class,
            ScoreSeeder::class,
        ]);


    }
}
