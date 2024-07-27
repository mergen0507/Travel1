<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\Place;

class HotelSeeder extends Seeder
{
    public function run()
    {
        $places = Place::all();
        foreach ($places as $place) {
            Hotel::create([
                'name' => 'Hotel ' . $place->name,
                'address' => 'Address of ' . $place->name,
                'place_id' => $place->id,
            ]);
        }
    }
}
