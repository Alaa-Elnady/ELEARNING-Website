<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'category' => fake()->jobTitle(),
            'duration' => fake()->randomDigitNotNull(),
            'instructor' => fake()->firstName($gender = 'male'|'female'),
            'description' => fake()->text($maxNbChars = 400),
            'chaptersNumber' => fake()->biasedNumberBetween($min = 5, $max = 20, $function = 'sqrt') ,
            'videosNumber' => fake()->biasedNumberBetween($min = 10, $max = 30, $function = 'sqrt') ,
            'courseContent' => 'Define PHP Variables - Operators - Arrays , Uses cookies and manages session data in PHP , Build a Login Form and Validate users data' ,
            // 'image' => fake()->imageUrl($width = 640, $height = 480),
            'studentsNumber' => fake()->numberBetween($min = 500, $max = 5000),
            'price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        ];

    }
}
