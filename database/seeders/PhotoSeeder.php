<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        Photo::factory(30)->create();
    }
}

