<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        Tag::create(['name' => 'Popular']);
        Tag::create(['name' => 'New']);
        Tag::create(['name' => 'Recommended']);
    }
}

