<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName($gender = 'male'|'female'),
            'job' => fake()->jobTitle(),
            'facebookUrl' => fake()->url(),
            'instagramUrl' => fake()->url(),
            'linkedinUrl' => fake()->url(),
            'introduction' => fake()->text($maxNbChars = 400),
            'image' => fake()->imageUrl($width = 640, $height = 480)
        ];
    }
}
