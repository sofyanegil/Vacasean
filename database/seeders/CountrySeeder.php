<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();

        Country::create([
            'name_country' => 'Indonesia',
            'slug' => 'id'
        ]);

        Country::create([
            'name_country' => 'Malaysia',
            'slug' => 'my'
        ]);

        Country::create([
            'name_country' => 'Singapura',
            'slug' => 'sg'
        ]);

        Country::create([
            'name_country' => 'Vietnam',
            'slug' => 'vn'
        ]);

        Country::create([
            'name_country' => 'Filipina',
            'slug' => 'ph'
        ]);

        Country::create([
            'name_country' => 'Laos',
            'slug' => 'la'
        ]);

        Country::create([
            'name_country' => 'Myanmar',
            'slug' => 'mm'
        ]);

        Country::create([
            'name_country' => 'Brunei',
            'slug' => 'bn'
        ]);

        Country::create([
            'name_country' => 'Kamboja',
            'slug' => 'kh'
        ]);

        Country::create([
            'name_country' => 'Thailand',
            'slug' => 'th'
        ]);
    }
}
