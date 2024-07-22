<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Historical']);
        Category::create(['name' => 'Adventure']);
        Category::create(['name' => 'Relaxation']);
        Category::create(['name' => 'Cultural']);
    }
}

