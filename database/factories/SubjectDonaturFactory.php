<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubjectDonatur>
 */
class SubjectDonaturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              'nama_subject' => $this->faker->sentence(mt_rand(2,2)),
              'nohp' => $this->faker->phoneNumber()
        ];
    }
}
