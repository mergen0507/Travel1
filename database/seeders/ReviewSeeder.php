<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Place;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $places = Place::all();

        foreach ($places as $place) {
            foreach ($users as $user) {
                Review::create([
                    'user_id' => $user->id,
                    'place_id' => $place->id,
                    'rating' => rand(1, 5),
                    'comment' => 'This is a sample review comment.'
                ]);
            }
        }
    }
}

