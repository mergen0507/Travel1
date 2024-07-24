<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;
use App\Models\Category;

class PlaceSeeder extends Seeder
{
    public function run()
    {
        $places = Place::factory(10)->create();

        // Her yer için rastgele kategoriler ekle
        $categories = Category::all();
        foreach ($places as $place) {
            $place->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}


