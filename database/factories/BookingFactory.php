<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'place_id' => \App\Models\Place::factory(),
            'booking_date' => $this->faker->date,
        ];
    }
}

