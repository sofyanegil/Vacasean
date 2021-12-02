<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlacesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(1, 4)),
            'slug' => $this->faker->slug(),
            'country_id'=> mt_rand(1,10),
            'city'=>$this->faker->city(),
            'about'=>collect($this->faker->paragraphs(mt_rand(5, 20)))
            ->map(
                fn ($p) => "<p>$p$p$p$p</p>"
            )->implode(''),
            'bujur'=>$this->faker->longitude(-180,20),
            'lintang'=>$this->faker->latitude(-90,90),
            
        ];
    }
}
