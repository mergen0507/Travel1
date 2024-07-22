<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    protected $model = Photo::class;

    public function definition()
    {
        return [
            'place_id' => \App\Models\Place::factory(),
            'path' => $this->faker->imageUrl,
        ];
    }
}

