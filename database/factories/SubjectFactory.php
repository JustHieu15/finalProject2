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
            'History' => 'history',
            'English' => 'english',
            'Music' => 'music',
            'Physic' => 'physic',
            'Foreign Language' => 'foreign-language',
            'Information Technology' => 'information-technology',
            'Literature' => 'literature',
            'Biology' => 'biology',
            'Chemistry' => 'chemistry',
            'Geography' => 'geography',
            'Civic Education' => 'civic-education',
        ];

        $name = $this->faker->unique()->randomElement(array_keys($nameAndSlug));
        $slug = $nameAndSlug[$name];

        return [
            'name' => $name,
            'slug' => $slug,
        ];
    }
}
