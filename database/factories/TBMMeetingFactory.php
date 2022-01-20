<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TBMMeetingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'external_id' => Str::random(100),
            'name' => $this->faker->name(),
            // 'email_verified_at' => now(),
        ];
    }
}
