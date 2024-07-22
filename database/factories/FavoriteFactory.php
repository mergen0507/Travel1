<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    protected $model = Favorite::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'place_id' => \App\Models\Place::factory(),
        ];
    }
}

