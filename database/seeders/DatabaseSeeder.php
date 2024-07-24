<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            PlaceSeeder::class,
            ReviewSeeder::class,
            PhotoSeeder::class,
            BookingSeeder::class,
            FavoriteSeeder::class,
        ]);
    }
}

