<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nameAndSlug = [
            'Math' => 'math',
            'Science' => 'science',
            'History' => 'history',
            'English' => 'english',
            'Art' => 'art',
            'Music' => 'music',
            'Physical Education' => 'physical-education',
            'Computer Science' => 'computer-science',
            'Health' => 'health',
            'Foreign Language' => 'foreign-language',
        ];

        $name = $this->faker->unique()->randomElement(array_keys($nameAndSlug));
        $slug = $nameAndSlug[$name];

        return [
            'name' => $name,
            'slug' => $slug,
        ];
    }
}
