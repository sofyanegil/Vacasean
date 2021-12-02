<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'places_id'=>mt_rand(1,20),
            'user_id'=>mt_rand(1,20),
            'title' => $this->faker->sentence(mt_rand(1, 4)),
            'slug' => $this->faker->slug(),
            // 'body' => '<p>' . implode('<p></p>', $this->faker->paragraphS(mt_rand(5, 10))) . '</p>',
            'body' => $body = collect($this->faker->paragraphs(mt_rand(5, 20)))
                ->map(
                    fn ($p) => "<p>$p$p$p$p</p>"
                )->implode(''),
            'excerpt' => Str::limit($body, 150),
            
        ];
    }
}
